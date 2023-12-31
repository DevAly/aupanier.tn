<?php
/*----------------------------------------------------------------------------------------------------------------------------
|                                                      ADMIN ROUTES
|----------------------------------------------------------------------------------------------------------------------------*/

Route::middleware([
    'web',
    \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
    \Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains::class,
])->prefix('admin-home')->name('tenant.')->group(function () {

    Route::controller(Tenant\Admin\ServiceController::class)->prefix('services')->middleware('adminglobalVariable')->group(function () {
        Route::get('/', 'index')->name('admin.service');
        Route::get('/add', 'add')->name('admin.service.add');
        Route::post('/', 'store')->name('admin.services.store');
        Route::get('/edit/{id}', 'edit_service')->name('admin.service.edit');
        Route::post('/update', 'update_service')->name('admin.service.update');
        Route::post('/delete/all/lang/{id}', 'delete')->name('admin.service.delete');
        Route::post('/bulk-action', 'bulk_action_service')->name('admin.service.bulk.action');

    });

    Route::controller(Tenant\Admin\ServiceCategoryController::class)->prefix('service-category')->middleware('adminglobalVariable')->group(function () {
        Route::get('/', 'index')->name('admin.service.category');
        Route::post('/', 'store');
        Route::post('/update', 'update_service')->name('admin.service.category.update');
        Route::post('/delete/all/lang/{id}', 'delete')->name('admin.service.category.delete');
        Route::post('/bulk-action', 'bulk_action_service')->name('admin.service.category.bulk.action');
    });

});



Route::middleware([
    'web',
    \Stancl\Tenancy\Middleware\InitializeTenancyByDomain::class,
    \Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains::class,
    'tenant_glvar'
])->group(function () {

    /*----------------------------------------------------------------------------------------------------------------------------
    |                                                      FRONTEND SERVICE ROUTES (Tenants)
    |----------------------------------------------------------------------------------------------------------------------------*/
        Route::middleware(['package_expire', 'website_creation_in_progress'])->controller(\Tenant\Frontend\ServiceController::class)->prefix('service')->name('tenant.')->group(function () {
            Route::get('/search/data', 'service_search_page')->name('frontend.service.search');
            Route::get('/{slug}', 'service_single')->name('frontend.service.single');
            Route::get('/category/{id}/{any}', 'category_wise_service_page')->name('frontend.service.category');
        });

});


