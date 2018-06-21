<?php
Router::get('/example', ['uses' => 'ExampleController@index', 'as' => 'plugin-example-index']);