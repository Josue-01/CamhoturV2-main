<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Localization;

Route::middleware([Localization::class])->group(
    function () {

        Route::get('/', function () {
            return view('home');
        });

        Route::get('/locale/{locale}', function ($locale) {
            return back();
        })->name('locale.change');

        Route::post('/set-locale', 'LocalizationController@setLocale')->name('set-locale');

        Auth::routes();

        // RUTA EMPRENDIMIENTO
        Route::resource('emprendimientos', App\Http\Controllers\EmprendimientoController::class)->middleware('auth');
        Auth::routes();
        // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [App\Http\Controllers\CatalogoController::class, 'index'])->name('dashboard');

        //RUTA DISTRITOS
        Route::resource('distritos', App\Http\Controllers\DistritoController::class)->middleware('auth');

        //RUTA EMPRESARIOS
        Route::resource('empresarios', App\Http\Controllers\EmpresarioController::class)->middleware('auth');

        //RUTA CLIENTES
        Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

        //RUTA CATALOGO
        Route::resource('catalogos', App\Http\Controllers\CatalogoController::class)->middleware('auth');

        // En web.php

        Route::get('mostrar-catalogos/{idEmprendimiento}', [App\Http\Controllers\EmprendimientoController::class, 'mostrarCatalogos'])->name('mostrar.catalogos');
        Route::get('catalogos-por-emprendimiento/{idEmprendimiento}', [App\Http\Controllers\CatalogoController::class, 'indexPorEmprendimiento'])->name('catalogos.por.emprendimiento');

        Route::get('catalogos-por-emprendimiento-informativa/{idEmprendimiento}', [App\Http\Controllers\CatalogoController::class, 'indexPorEmprendimientoInf'])->name('catalogos.por.emprendimiento.informativa');


        //RUTA FILTRO DE PRUEBA

        //Route::get('tipoFiltrado/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'filtrarPorTipo'])->middleware('auth')->name('tipoFiltrado');
        Route::get('filtrar-emprendimientos/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'filtrarEmprendimientosPorTipo'])->name('filtrar-emprendimientos');

        Route::get('filtrar-emprendimientos-informativa/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'filtrarEmprendimientosPorTipoInf'])->name('filtrar-emprendimientos-informativa');

        //Route::get('filtrar-emprendimientos/{tipo}', 'EmprendimientoController@filtrarEmprendimientosPorTipo')->name('filtrar-emprendimientos');

        //Route::get('filtrar-emprendimientos', [App\Http\Controllers\EmprendimientoController::class, 'filtrar'])->middleware('auth')->name('filtrar-emprendimientos');
        //Route::get('emprendimientos.index', [App\Http\Controllers\EmprendimientoController::class, 'index'])->middleware('auth')->name('emprendimientos.index');

        Route::get('/buscar-emprendimientos/{distritoId}/{tipo}', [App\Http\Controllers\EmprendimientoController::class, 'buscarPorDistrito']);
    }
);
