<?php
header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::get('chats','Api\ChatsController@index');
Route::get('events','Api\EventsController@index');
Route::get('messages','Api\MessagesController@index');
Route::get('noticias','Api\NoticiasController@index');
Route::get('projects','Api\ProjectsController@index');
Route::get('users','Api\UsersController@index');