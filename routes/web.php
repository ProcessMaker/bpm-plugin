<?php
Route::get('/example', ['uses' => 'ExampleController@index', 'as' => 'plugin-example-index']);