<?php

use Manishhiran\Helloworld\HelloworldController;

Route::get('timezones/{timezone?}',  array('as' => 'timezones',
    'uses' => HelloworldController::class.'@index'));
