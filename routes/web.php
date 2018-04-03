<?php

Route::get('/', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');

// Controller: PostController

// Eloquent Model: Post

// migration => create_posts_table
