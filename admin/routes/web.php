<?php
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

/**
 * ------------------------------------------------------------------------
 * Admin Routes
 * ------------------------------------------------------------------------
 */
Route::get('/', 'Back\AccountController@getHome')->name('login');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Back\AccountController@getHome')->name('login');

    /**
     * ---------------------------------------------------------------------
     * Account Routes
     * ---------------------------------------------------------------------
     */
    Route::group(['prefix' => 'account'], function () {
        Route::get('logout', 'Back\AccountController@getLogout');
        Route::post('login', 'Back\AccountController@postLogin');
        Route::get('password-recovery', 'Back\AccountController@getRecovery');
        Route::post('password-recovery', 'Back\AccountController@postRecovery');
        Route::get('password/reset/{token}', 'Back\AccountController@getReset')->name('password.request');
        Route::post('password/reset', 'Back\AccountController@postReset')->name('password.reset');
    });

    Route::group(['middleware' => ['auth']], function () {

        /**
         * ---------------------------------------------------------------------
         * Dashboard Routes
         * ---------------------------------------------------------------------
         */
        Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', 'Back\Dashboard\DashboardController@getHome');

            /**
             * System Routes
             */
            Route::group(['prefix' => 'system'], function () {
                /**
                 * --------------------------------------------------
                 * User
                 * --------------------------------------------------
                 */
                Route::group(['prefix' => 'user'], function () {
                    Route::get('/', 'Back\Dashboard\System\UserController@getHome');

                    Route::get('create', 'Back\Dashboard\System\UserController@getCreate');
                    Route::post('store', 'Back\Dashboard\System\UserController@postStore');

                    Route::get('edit/{id}', 'Back\Dashboard\System\UserController@getEdit');
                    Route::post('update/{id}', 'Back\Dashboard\System\UserController@postUpdate');

                    Route::get('delete/{id}', 'Back\Dashboard\System\UserController@getDelete');
                });

                /**
                 * System User Profiles
                 *
                 */
                Route::group(['prefix' => 'profile'], function () {
                    Route::get('/', 'Back\Dashboard\System\ProfileController@getHome');
                    Route::get('create', 'Back\Dashboard\System\ProfileController@getCreate');
                    Route::post('create', 'Back\Dashboard\System\ProfileController@postStore');

                    Route::get('edit/{id}', 'Back\Dashboard\System\ProfileController@getEdit');
                    Route::post('update/{id}', 'Back\Dashboard\System\ProfileController@postUpdate');

                    Route::get('delete/{id}', 'Back\Dashboard\System\ProfileController@getDelete');
                });
            });


        /**
        * -------------------------------------------------------------------
        * Especialidades   by magaly-> ing.magalylf@hotmail.com
        * -------------------------------------------------------------------
        */
            Route::group(['prefix' => 'especialidades'], function () {
                Route::get('/', 'Back\Dashboard\Specialties\SpecialtiesController@getHome');
                Route::get('create', 'Back\Dashboard\Specialties\SpecialtiesController@getCreate');
                Route::post('store', 'Back\Dashboard\Specialties\SpecialtiesController@postStore');
                Route::get('edit/{id}', 'Back\Dashboard\Specialties\SpecialtiesController@getEdit');
                Route::post('update/{id}', 'Back\Dashboard\Specialties\SpecialtiesController@postUpdate');
                Route::get('delete/{id}', 'Back\Dashboard\Specialties\SpecialtiesController@getDelete');
                Route::get('activar/{id}', 'Back\Dashboard\Specialties\SpecialtiesController@getActivar');
                });
        /**
        * -------------------------------------------------------------------
        * Doctores   by magaly-> ing.magalylf@hotmail.com
        * -------------------------------------------------------------------
        */
            Route::group(['prefix' => 'doctores'], function () {
                Route::get('/', 'Back\Dashboard\Doctor\DoctorController@getHome');
                Route::get('create', 'Back\Dashboard\Doctor\DoctorController@getCreate');
                Route::post('store', 'Back\Dashboard\Doctor\DoctorController@postStore');
                Route::get('edit/{id}', 'Back\Dashboard\Doctor\DoctorController@getEdit');
                Route::post('update/{id}', 'Back\Dashboard\Doctor\DoctorController@postUpdate');
                Route::get('delete/{id}', 'Back\Dashboard\Doctor\DoctorController@getDelete');
                });

        /**
        * -------------------------------------------------------------------
        * Cotizador   by magaly-> ing.magalylf@hotmail.com
        * -------------------------------------------------------------------
        */ 
             Route::group(['prefix' => 'cotizador'], function () {
                Route::get('/', 'Back\Dashboard\Cotizador\CotizadorController@getHome');
                Route::get('create', 'Back\Dashboard\Cotizador\CotizadorController@getCreate');
                Route::post('store', 'Back\Dashboard\Cotizador\CotizadorController@postStore');
                Route::get('edit/{id}', 'Back\Dashboard\Cotizador\CotizadorController@getEdit');
                Route::post('update/{id}', 'Back\Dashboard\Cotizador\CotizadorController@postUpdate');
                Route::get('delete/{id}', 'Back\Dashboard\Cotizador\CotizadorController@getDelete');
                });

        /**
        * -------------------------------------------------------------------
        * Categorias   by magaly-> ing.magalylf@hotmail.com
        * -------------------------------------------------------------------
        */ 
             Route::group(['prefix' => 'categorias'], function () {
                Route::get('/', 'Back\Dashboard\Categorias\CategoriasController@getHome');
                Route::get('create', 'Back\Dashboard\Categorias\CategoriasController@getCreate');
                Route::post('store', 'Back\Dashboard\Categorias\CategoriasController@postStore');
                Route::get('edit/{id}', 'Back\Dashboard\Categorias\CategoriasController@getEdit');
                Route::post('update/{id}', 'Back\Dashboard\Categorias\CategoriasController@postUpdate');
                Route::get('delete/{id}', 'Back\Dashboard\Categorias\CategoriasController@getDelete');
                Route::get('activar/{id}', 'Back\Dashboard\Categorias\CategoriasController@getActivar');
                });


            /**
             * -------------------------------------------------------------------
             * Grafica de contactos recibidos por dia   by jair lomas-> jair.lomas@metodika.mx
             * -------------------------------------------------------------------
             */
            Route::group(['prefix' => 'grafica_contactos_recibidos'], function () {
                Route::get('/', 'Back\Report\ContactController@getHome');
                Route::get('/{day_start}/{month_start}/{year_start}/{day_finish}/{month_finish}/{year_finish}', 'Back\Report\ContactController@getHome_with_filter');
                Route::get('getContactForm', 'Back\Report\ContactController@getContactForm');
            });


            /**
             * -------------------------------------------------------------------
             * Contactos recibidos por dia   by jair lomas-> jair.lomas@metodika.mx
             * -------------------------------------------------------------------
             */
            Route::group(['prefix' => 'contactos_recibidos'], function () {
                Route::get('/', 'Back\Report\ContactController@getHome_list');
                Route::post('store', 'Back\Report\ContactController@postStore');
            });


         /**
        * -------------------------------------------------------------------
        * FIN
        * -------------------------------------------------------------------
        */          

        });
    });
});
