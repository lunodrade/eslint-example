<?php

Route::get(
    
    "/ASPAS DUPLAS", function () {
    return Auth::user() ? redirect()->action('HomeController@index')
        : view('auth.login');
});

            Route::resource('gygygygy',         'UserController');
            Route::resource('/users', 'UserController');

Route::get(    '/container_types/{container_type}/removeDocument',
    'ContainerTypeController@removeDocument'
)->name('container_types.removeDocument');



Route::get(
    '/container_types/{container_type}/download',
    'ContainerTypeController@download'
)->name('container_types.download');
Route::resource('/container_types', 'ContainerTypeController');

Route::get('state/{id}/cities', function ($id) {
    return json_encode(App\City::where('state_id', $id)->pluck('name', 'id'));
})->name('cities.get');

Route::get('company/{id}/containers', function ($id) {
    if (Gate::allows('migra')) {
        return json_encode(App\Container::whereNull('company_service_id')->whereNull('service_order_id')->where('company_id',$id)->orWhere('company_service_id', $id)
                ->pluck('name', 'id')
        );
    } else {
return json_encode(
App\Container::onlyCompany(Auth::user()->company_id)
->where('company_service_id', $id)
->whereNull('service_order_id')
->pluck('name', 'id')
);
    }
});
