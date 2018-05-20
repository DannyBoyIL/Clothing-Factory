<?php

# Shop
Route::get('shop', 'ShopController@shop');
Route::get('shop/categories', 'ShopController@categories');
Route::get('shop/add-to-cart', 'ShopController@addToCart');
Route::get('shop/clear-cart', 'ShopController@clearCart');
Route::get('shop/remove-item', 'ShopController@removeItem');
Route::get('shop/update-cart', 'ShopController@updateCart');
Route::get('shop/checkout', 'ShopController@checkout');
Route::get('shop/{category_url}', 'ShopController@products');
Route::get('shop/{category_url}/{product_url}', 'ShopController@item');

# Order Process deliveryPage
Route::get('order/address', 'OrderController@addressPage');
Route::post('order/address', 'OrderController@postAddress');
Route::get('order/delivery', 'OrderController@deliveryPage');
Route::post('order/delivery', 'OrderController@postDelivery');
Route::get('order/payment', 'OrderController@paymentPage');
Route::post('order/payment', 'OrderController@postPayment');
Route::get('order/review', 'OrderController@reviewPage');
Route::get('order/order', 'OrderController@order');

# User
Route::get('user/login', 'UserController@login');
Route::post('user/login', 'UserController@postLogin');
Route::get('user/register', 'UserController@register');
Route::post('user/register', 'UserController@postRegister');
Route::get('user/logout', 'UserController@logout');

# CMS
Route::get('cms/dashboard', 'CMSController@dashboard');
Route::get('cms/order', 'CMSController@orders');
Route::resource('cms/menu', 'MenuController');
Route::resource('cms/content', 'ContentController');
Route::resource('cms/category', 'CategoryController');
Route::resource('cms/product', 'ProductController');

# Pages
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('{url}', 'PagesController@dynamicMenu');
