<?php
Route::get('plugins/example/message', ['uses' => 'Api\MessageController@index', 'as' => 'plugin-example-api-message']);