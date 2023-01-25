<?php

use App\Http\Controllers\ProjectController;

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'can:admin_access']], function () {
    //Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');
    // Settings
    Route::get('/change-color', [
        'uses' => 'DashboardController@changeColor',
        'as' => 'change.color',
    ]);

    Route::get('/fix-nav', [
        'uses' => 'DashboardController@fixNav',
        'as' => 'change.nav',
    ]);



    Route::get('/mensajes-actualizaciones', [
        'uses' => 'DashboardController@messages',
        'as' => 'update.messages',
    ]);

    Route::resource('banners', 'BannerController');

    Route::post('/banners/status/{id}', [
        'uses' => 'BannerController@status',
        'as' => 'banners.status',
    ]);

    Route::resource('popups', PopupController::class);

    Route::post('/popups/status/{id}', [
        'uses' => 'PopupController@status',
        'as' => 'popups.status',
    ]);

    Route::resource('band', HeaderbandController::class);
    Route::post('/band/status/{id}', [
        'uses' => 'HeaderbandController@status',
        'as' => 'band.status',
    ]);

    //Configuration
    Route::get('/configuration', 'DashboardController@configuration')->name('configuration'); //

    //Catalog
    Route::post('/get-subcategories', [
        'uses' => 'ProductController@fetchSubcategory',
        'as' => 'dynamic.subcategory',
    ]);

    //Proyectos
    Route::resource('projects', ProjectController::class);

    //Públicaciones
    Route::resource('posts', PostController::class);

    // Get Functions
    Route::resource('categories', CategoryController::class); //

    Route::resource('clients', ClientController::class);

    Route::resource('user-rules', UserRuleController::class);

    Route::get('/user-rules/change-status/{id}', [
        'uses' => 'UserRuleController@changeStatus',
        'as' => 'user-rules.status',
    ]);

    Route::get('clientsquery', [
        'uses' => 'ClientController@query',
        'as' => 'clients.search',
    ]);

    Route::resource('newsletter', NewsletterController::class); //
    //Administration
    Route::resource('seo', SEOController::class); //
    Route::resource('legals', LegalTextController::class);
    Route::resource('faq', FAQController::class);

    Route::resource('users', UserController::class); //
    Route::get('user/config', 'UserController@config')->name('user.config');  //
    Route::get('user/help', 'DashboardController@help')->name('user.help');  //

    Route::resource('template', MailThemeController::class); //
    Route::resource('mail', MailController::class)->except(['show, create, index']);
    Route::resource('notifications', NotificationController::class)->except(['show']); //

    Route::get('/notifications/all', [
        'uses' => 'NotificationController@all',
        'as' => 'notifications.all',
    ]);

    Route::get('/notifications/all/mark-as-read', [
        'uses' => 'NotificationController@markAsRead',
        'as' => 'notifications.mark.read',
    ]);

    //Country
    //Route::resource('countries', CountryController::class);
    Route::resource('states', StateController::class);
    Route::resource('cities', CityController::class);
    Route::resource('config', StoreConfigController::class);

    Route::post('config-api-token', [
        'uses' => 'StoreConfigController@apiToken',
        'as' => 'api.token.store',
    ]);

    Route::resource('integrations', IntegrationController::class);
    Route::get('general-preferences', [
        'uses' => 'IntegrationController@index',
        'as' => 'general.config',
    ]);

    Route::resource('themes', StoreThemeController::class);
    Route::get('/themes/{id}/cambiar-estado', [
        'uses' => 'StoreThemeController@changeStatus',
        'as' => 'themes.status',
    ]);

    Route::post('store-logo', [
        'uses' => 'IntegrationController@storeLogo',
        'as' => 'store.logo',
    ]);

    // Sección Soporte
    Route::get('support', 'DashboardController@shipping')->name('support.help');

    /* Rutas de Correo */
    Route::post('/resend-order-mail/{order_id}', [
        'uses' => 'NotificationController@resendOrder',
        'as' => 'resend.order.mail',
    ]);

    Route::post('/resend-invoice-mail/{invoice_id}', [
        'uses' => 'NotificationController@resendInvoice',
        'as' => 'resend.invoice.mail',
    ]);

    // Búsqueda
    Route::get('/busqueda-general', [
        'uses' => 'DashboardController@generalSearch',
        'as' => 'back.search.query',
    ]);
});

Route::get('/', [
    'uses' => 'FrontController@index',
    'as' => 'index',
]);

Route::get('sobre_nosotros', [
    'uses' => 'FrontController@about',
    'as' => 'about',
]);

Route::get('catalog', 'FrontController@catalogAll')->name('catalog.all');
Route::get('catalog_promo', 'FrontController@catalogPromo')->name('catalog.promo');
Route::post('catalog_order', 'FrontController@catalog_order')->name('catalog.orderby');

Route::get('/catalog/{category_slug}', [
    'uses' => 'FrontController@catalog',
    'as' => 'catalog',
]);

/* Newsletter */
Route::post('registro-newsletter', 'FrontController@newsletter')->name('newsletter_front.store');


/* Search Functions */
Route::get('/busqueda-general', [
    'uses' => 'SearchController@query',
    'as' => 'search.query',
]);


//Profile
Route::group(['prefix' => 'profile', 'middleware' => ['web', 'can:customer_access']], function () {
    Route::get('/', 'FrontController@profile')->name('profile');
    Route::get('wishlist', 'FrontController@wishlist')->name('wishlist');
    Route::get('orders', 'FrontController@shopping')->name('shopping');
    Route::get('points', 'FrontController@points')->name('points');

    Route::post('orders/{order_id}/request-invoice/{user_id}', [
        'uses' => 'FrontController@invoiceRequest',
        'as' => 'invoice.request',
    ]);

    Route::get('address', 'FrontController@address')->name('address');
    Route::get('address/{id}/edit', 'FrontController@editAddress')->name('address.edit');
    Route::get('account', 'FrontController@account')->name('account');

    Route::put('/account/{id}', [
        'uses' => 'FrontController@updateAccount',
        'as' => 'profile.update',
    ]);

    Route::put('/address/{id}', [
        'uses' => 'FrontController@updateAddress',
        'as' => 'address.update',
    ]);

    Route::post('/address-store', [
        'uses' => 'FrontController@storeAddress',
        'as' => 'address.store',
    ]);

    Route::delete('/address/{id}', [
        'uses' => 'FrontController@destroyAddress',
        'as' => 'address.destroy',
    ]);

    Route::get('/user/change-image', [
        'uses' => 'FrontController@editImage',
        'as' => 'profile.image',
    ]);

    Route::put('/user/change-image/{id}', [
        'uses' => 'FrontController@updateImage',
        'as' => 'profile.image.update',
    ]);
});

Route::get('legales/{type}', 'FrontController@legalText')->name('legal.text');
Route::get('preguntas_frecuentes', 'FrontController@faqs')->name('faqs.text');
