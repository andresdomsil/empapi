<?php
Route::get('chats','Api\ChatsController@index');
Route::get('events','Api\EventsController@index');
Route::get('messages','Api\MessagesController@index');
Route::get('noticias','Api\NoticiasController@index');
Route::get('projects','Api\ProjectsController@index');
Route::get('users','Api\UsersController@index');