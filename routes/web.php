    <?php

    use App\Http\Controllers\AdministradoresController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PanteonController;
    use App\Http\Controllers\TramiteController;
    use App\Http\Controllers\BienesController;
    use App\Http\Controllers\ServiciosController;
    use App\Http\Controllers\MercadosController;
    use App\Http\Controllers\PublicaController;
    use App\Http\Controllers\InicioController;
    use App\Http\Controllers\AdminController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\UserborradoController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\PerfilController;
    use App\Http\Controllers\CorrespondenciaController;
    use App\Http\Controllers\UsertramiteController;
    use App\Http\Controllers\ReglamentoController;
    use App\Models\Correspondencia;

/*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */


    Route::get('/',HomeController::class)->name('inicio');

    Route::post('/login',[HomeController::class, 'login'])->name('home.login');

    Route::put('/login',[HomeController::class, 'logout'])->name('home.logout');


   // Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home.index');

    Route::get('home',[InicioController::class, 'index'])->middleware('auth')->name('home.index');
    Route::get('home/lugar',[InicioController::class, 'lugar'])->middleware('auth')->name('home.lugar');
    Route::get('home/administrador',[InicioController::class, 'administrador'])->middleware('auth')->name('home.administrador');

    /**estos son las rutas de los cruds mediante un resources se encarga de los metodos principales */
    Route::resource('auth',UserController::class);
    Route::resource('tramites' ,TramiteController::class)->middleware('auth');
    Route::resource('administradores',AdministradoresController::class)->middleware('auth');
    Route::resource('correspondencias' ,CorrespondenciaController::class)->middleware('auth');
    Route::resource('reglamentos' ,ReglamentoController::class)->middleware('auth');
    Route::resource('bitacoras' ,BitacoraController::class)->middleware('auth');


    //Route::resource('auth',UserController::class);

    /** estas son las vistas del administrador del sistemas */
    Route::get('admin',[AdminController::class, 'index'])->middleware('auth')->name('admin.index');
    Route::get('admin/lugar',[AdminController::class, 'lugar'])->middleware('auth')->name('admin.lugar');
    Route::get('admin/borrados',[AdminController::class, 'borrados'])->middleware('auth')->name('admin.borrados');
    Route::get('admin/show',[AdminController::class, 'show'])->middleware('auth')->name('admin.show');
    Route::get('admin/borrado',[AdminController::class, 'restore'])->middleware('auth')->name('admin.restore');
    Route::get('admin/borrador/borradores',[AdminController::class, 'borradores'])->middleware('auth')->name('admin.borrador.borradores');
    Route::get('admin/borrador/{tramite}/edit',[AdminController::class, 'edit'])->middleware('auth')->name('admin.borrador.edit');
    Route::get('admin/borrador/{tramite}',[AdminController::class, 'destroy'])->middleware('auth')->name('admin.borrador.destroy');
    Route::get('volver',[AdminController::class, 'volver'])->middleware('auth')->name('admin.volver');
    Route::get('admin/{tramite}',[AdminController::class, 'destroyb'])->middleware('auth')->name('admin.destroyb');

    //vistas para usuarios borrados
    Route::get('usuariosborrados',[UserborradoController::class, 'index'])->middleware('auth')->name('usuariosborrados.index');
    Route::get('usuariosborrado/index',[UserborradoController::class, 'restore'])->middleware('auth')->name('usuariosborrados.restore');
    Route::get('usuariosborrados/administradores',[UserborradoController::class, 'administradores'])->middleware('auth')->name('usuariosborrados.administradores');
    Route::get('usuariosborrado',[UserborradoController::class, 'restaurar'])->middleware('auth')->name('usuariosborrados.restaurar');

    //vistas del perfil del usuario
Route::get('perfil',[PerfilController::class, 'index'])->middleware('auth')->name('perfil.index');
Route::get('perfil/{user}/edit',[PerfilController::class, 'edit'])->middleware('auth')->name('perfil.edit');




    //Route::get('admin/usuarios',[AdminController::class, 'usuarios'])->name('admin.usuarios');

    Route::get('panteones',[PanteonController::class, 'index'])->middleware('auth')->name('panteones.index');
    Route::get('panteones/lugar',[PanteonController::class, 'lugar'])->middleware('auth')->name('panteones.lugar');
    Route::get('panteones/administrador',[PanteonController::class, 'administrador'])->middleware('auth')->name('panteones.administrador');
    Route::get('bienes',[BienesController::class, 'index'])->middleware('auth')->name('bienes.index');
    Route::get('bienes/lugar',[BienesController::class, 'lugar'])->middleware('auth')->name('bienes.lugar');
    Route::get('bienes/administrador',[BienesController::class, 'administrador'])->middleware('auth')->name('bienes.administrador');
    Route::get('servicios',[ServiciosController::class, 'index'])->middleware('auth')->name('servicios.index');
    Route::get('servicios/lugar',[ServiciosController::class, 'lugar'])->middleware('auth')->name('servicios.lugar');
    Route::get('servicios/administrador',[ServiciosController::class, 'administrador'])->middleware('auth')->name('servicios.administrador');
    Route::get('mercados',[MercadosController::class, 'index'])->middleware('auth')->name('mercados.index');
    Route::get('mercados/lugar',[MercadosController::class, 'lugar'])->middleware('auth')->name('mercados.lugar');
    Route::get('mercados/administrador',[MercadosController::class, 'administrador'])->middleware('auth')->name('mercados.administrador');
    Route::get('publica',[PublicaController::class, 'index'])->middleware('auth')->name('publica.index');
    Route::get('publica/lugar',[PublicaController::class, 'lugar'])->middleware('auth')->name('publica.lugar');
    Route::get('publica/administrador',[PublicaController::class, 'administrador'])->middleware('auth')->name('publica.administrador');
//ESTE MUESTRA LOS TRAMITES REALIZADOS POR LOS LICENCIADOS
    Route::get('usertramite/{user}',[UsertramiteController::class, 'index'])->middleware('auth')->name('usertramite.index');

//bitacoras
//Route::get('bitacoras',[BitacoraController::class, 'index'])->middleware('auth')->name('bitacoras.index');

/*
        //rutas de usuarios
    Route::get('auth',[UserController::class, 'index'])->middleware('auth')->name('auth.index');
    Route::get('auth/create',[UserController::class, 'create'])->middleware('auth')->name('auth.create');
    Route::post('auth',[UserController::class, 'store'])->middleware('auth')->name('auth.store');
    //Route::get('usuarios/{usuarios}',[UserController::class, 'show'])->middleware('auth')->name('usuarios.show');
    Route::get('auth/{auth}/edit',[UserController::class, 'edit'])->middleware('auth')->name('auth.edit');
    Route::put('auth/{auth}',[UserController::class, 'update'])->middleware('auth')->name('auth.update');
    Route::delete('auth/{auth}',[UserController::class, 'destroy'])->middleware('auth')->middleware('auth')->name('auth.destroy');
*/
//vistas de la correspondencia
/*
Route::get('correspondencias',[CorrespondenciaController::class, 'index'])->middleware('auth')->name('correspondencias.index');
Route::get('correspondecia/create',[CorrespondenciaController::class, 'create'])->middleware('auth')->name('correspondencias.create');
Route::post('correspondencias',[CorrespondenciaController::class, 'store'])->middleware('auth')->name('correspondencias.store');
Route::delete('correspondencias/{correspondencias}',[CorrespondenciaController::class, 'destroy'])->middleware('auth')->name('correspondencias.destroy');
Route::get('correspondencias/{correspondencias}/edit',[CorrespondenciaController::class, 'edit'])->middleware('auth')->name('correspondencias.edit');

*/

//reglamentos
   /* Route::get('reglamentos',[ReglamentoController::class, 'index'])->middleware('auth')->name('reglamentos.index');
    Route::get('reglamentos/create',[ReglamentoController::class, 'create'])->middleware('auth')->name('reglamentos.create');
    Route::post('reglamentos',[ReglamentoController::class, 'store'])->middleware('auth')->name('reglamentos.store');
    Route::get('reglamentos/{reglamentos}',[ReglamentoController::class, 'show'])->middleware('auth')->name('reglamentos.show');
    Route::delete('reglamentos/{reglamentos}',[ReglamentoController::class, 'destroy'])->middleware('auth')->middleware('auth')->name('reglamentos.destroy');
*/
