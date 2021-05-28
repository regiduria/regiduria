<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTramite;
use App\Models\Reglamento;
use Illuminate\Http\Request;

class ReglamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reglamentos= Reglamento::orderBy('id','desc') ->paginate();
        return view('reglamentos.index',compact('reglamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reglamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Reglamento $reques, Request $request)
    {
        $area= trim($request->get('area'));
     //   $fecha= trim($request->get('fecha_emitido'));
        $nombre= trim($request->get('nombre'));
        $ubicacion1=$request->file("ubicacion");

     //return $nombre . $area . $fecha;
        if($nombre==""){
            return redirect()->route('reglamentos.create')->with('nombre','ok');
        }
        if($ubicacion1==""){
            return redirect()->route('reglamentos.create')->with('pdf','ok');
        }
        else{
               if($request->hasFile("ubicacion")){
            $file=$request->file("ubicacion");
            $nombres = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("pdf/".$nombres);
           // return $ruta;
            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
                $reglamento=Reglamento::create([
                    'area'=> $area,
                    'nombre'=> $nombre,
                    'fecha_emitido'=> $request['fecha_emitido'],
                  //  'fecha_emitido'=> $fecha,
                    'ubicacion'=> $ruta,
                    ]);
                    return redirect()->route('reglamentos.index');
            }else{
                dd("NO ES UN PDF");
            }
       }
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reglamento $reglamento)
    {
       // return $reglamento;
                $ruta= $reglamento->ubicacion;
          //      return $ruta;
                header('Content-type: application/pdf');
                header('Content-Disposition: inline; filename="archivo.pdf"');
                //header('Content-Disposition: attachment; filename="archivo.pdf"');
                readfile($ruta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reglamento $reglamento)
    {
        $ruta= $reglamento->ubicacion;
        $reglamento->delete();
       unlink($ruta);
       return redirect()->route('reglamentos.index')->with('eliminar','ok');
    }
}
