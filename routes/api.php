<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VisitorController;

/**Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

/**
 * GET	        /itemlist/{item}/comments	        index	    itemlist.comments.index
 * GET	        /itemlist/{item}/comments/create	create	    itemlist.comments.create
 * POST	        /itemlist/{item}/comments	        store	    itemlist.comments.store
 * GET	        /comments/{comment}	                show        comments.show
 * GET	        /comments/{comment}/edit	        edit	    comments.edit
 * PUT/PATCH	/comments/{comment}	                update	    comments.update
 * DELETE	    /comments/{comment}	                destroy	    comments.destroy
*/

//Controller : AdministrationController

//Admin's Actions
Route::controller(AdministrationController::class)->group(function () {
    //CRUD Functions
    //Create
    Route::post('/add-continent',  'create_continent');
    Route::post('/add-country',  'create_country');
    Route::post('/add-city',  'create_city');
    Route::post('/add-category',  'create_category');
    Route::post('/add-subcategory',  'create_subcategory');
    Route::post('/add-status',  'create_status');
    Route::post('/add-message_type',  'create_message_type');
    Route::post('/add-admin_role',  'create_admin_role');
    Route::post('/add-admin',  'create_admin');
    Route::post('/add-blog_post',  'create_blog_post');
    Route::post('/add-chat_message',  'create_chat_message');
    Route::post('/add-note',  'create_note');
    Route::post('/add-payment_method',  'create_payment_method');
    Route::post('/add-informing_message',  'create_informing_message');
    //Read
    Route::get('/continents',  'read_continents');
    Route::get('/countries',  'read_countries');
    Route::get('/cities',  'read_cities');
    Route::get('/categories',  'read_categories');
    Route::get('/subcategories',  'read_subcategories');
    Route::get('/statuses',  'read_statuses');
    Route::get('/message_types',  'read_message_types');
    Route::get('/admins_roles',  'read_admins_roles');
    Route::get('/admins',  'read_admins');
    Route::get('/blog_posts',  'read_blog_posts');
    Route::get('/artists_profils',  'read_artists_profils');
    Route::get('/artworks',  'read_artworks');
    Route::get('/clients',  'read_clients');
    Route::get('/clients_messages',  'read_clients_messages');
    Route::get('/visitors',  'read_visitors');
    Route::get('/chat_messages',  'read_chat_messages');
    Route::get('/notes',  'read_notes');
    Route::get('/payment_methods',  'read_payment_methods');
    Route::get('/transactions',  'read_transactions');
    Route::get('/informing_messages',  'read_informing_messages');
    //Update
    Route::put('/continents/{id}',  'update_continent');
    Route::put('/countries/{id}',  'update_country');
    Route::put('/cities/{id}',  'update_city');
    Route::put('/categories/{id}',  'update_category');
    Route::put('/subcategories/{id}',  'update_subcategory');
    Route::put('/statuses/{id}',  'update_status');
    Route::put('/message_types/{id}',  'update_message_type');
    Route::put('/admins_roles/{id}',  'update_admin_role');
    Route::put('/admins/{id}',  'update_admin');
    Route::put('/blog_posts/{id}',  'update_blog_post');
    Route::put('/artists_profils/{id}',  'update_artist_profil');
    Route::put('/clients/{id}',  'update_client');
    Route::put('/chat_messages/{id}',  'update_chat_message');
    Route::put('/notes/{id}',  'update_note');
    Route::put('/payment_methods/{id}',  'update_payment_method');
    Route::put('/informing_messages/{id}',  'update_informing_message');
    //Delete
    Route::delete('/continents/{id}',  'delete_continent');
    Route::delete('/countries/{id}',  'delete_country');
    Route::delete('/cities/{id}',  'delete_city');
    Route::delete('/categories/{id}',  'delete_category');
    Route::delete('/subcategories/{id}',  'delete_subcategory');
    Route::delete('/statuses/{id}',  'delete_status');
    Route::delete('/message_types/{id}',  'delete_message_type');
    Route::delete('/admin_roles/{id}',  'delete_admin_role');
    Route::delete('/admins/{id}',  'delete_admin');
    Route::delete('/blog_posts/{id}',  'delete_blog_post');
    Route::delete('/artist_profils/{id}',  'delete_artist_profil');
    Route::delete('/artworks/{id}',  'delete_artwork');
    Route::delete('/clients/{id}',  'delete_client');
    Route::delete('/client_messages/{id}',  'delete_client_message');
    Route::delete('/visitors/{id}',  'delete_visitor');
    Route::delete('/chat_messages/{id}',  'delete_chat_message');
    Route::delete('/notes/{id}',  'delete_note');
    Route::delete('/payment_methods/{id}',  'delete_payment_method');
    Route::delete('/transactions/{id}',  'delete_transaction');
    Route::delete('/informing_messages/{id}',  'delete_informing_message');
    //Show
    Route::get('/continents/{id}',  'show_continent');
    Route::get('/countries/{id}',  'show_country');
    Route::get('/cities/{id}',  'show_city');
    Route::get('/categories/{id}',  'show_category');
    Route::get('/subcategories/{id}',  'show_subcategory');
    Route::get('/statuses/{id}',  'show_status');
    Route::get('/message_types/{id}',  'show_message_type');
    Route::get('/admins_roles/{id}',  'show_admin_role');
    Route::get('/admins/{id}',  'show_admin');
    Route::get('/artworks/{id}',  'show_artwork');
    Route::get('/blog_posts/{id}',  'show_blog_post');
    Route::get('/artists_profils/{id}',  'show_artist_profil');
    Route::get('/clients/{id}',  'show_client');
    Route::get('/clients_messages/{id}',  'show_client_message');
    Route::get('/chat_messages/{id}',  'show_chat_message');
    Route::get('/notes/{id}',  'show_note');
    Route::get('/informing_messages/{id}',  'show_informing_message');
    Route::get('/visitors/{id}',  'show_visitor');//visitors messages are included
    Route::get('/transactions/{id}',  'show_transaction');

    //Authentification functions
    Route::post('/admin-login',  'admin_login');
    Route::get('/admin',  'admin');
    Route::post('/admin-logout',  'admin_logout');
});

//Artist's Actions
Route::controller(ProfilController::class)->group(function () {
    //CRUD Functions
    //Create
    Route::post('/add-artwork', 'create_artwork');
    //Read
    //Update
    Route::put('/artworks/{id}', 'update_artwork');
    //Delete
    //Authentification functions
    Route::post('/artist-registration', 'artist_registration');
    Route::post('/artist-login', 'artist_login');
    Route::get('/artist', 'artist');
    Route::post('/artist-logout', 'artist_logout');
});

//Client's Actions
Route::controller(ClientController::class)->group(function () {
    //CRUD Functions
    //Create
    Route::post('/add-client-comment', 'create_client_message');
    Route::post('/add-cart', 'create_cart');
    Route::post('/add-order', 'create_order');
    //Read
    Route::get('/carts', 'read_carts');
    //Update
    Route::put('/client-messages/{id}', 'update_client_message');
    Route::put('/carts/{id}', 'update_client_message');
    //Delete
    Route::delete('/carts/{id}', 'delete_cart');
    //Show
    Route::get('/carts/{id}', 'show_cart');
    //Authentification functions
    Route::post('/client-registration', 'client_registration');
    Route::post('/client-login', 'client_login');
    Route::get('/client', 'client');
    Route::post('/client-logout', 'client_logout');
});

//Visitor's Actions
Route::controller(VisitorController::class)->group(function () {
    //CRUD Functions
    //Create
    Route::post('/add-visitor-message', 'create_visitor_message');
    //Read
    //Update
    Route::put('/visitors/{id}', 'update_visitor_message');
    //Delete
});
