<?php

Route::get('/','insController@index')->name('ins.home');

Route::resource('ins', 'InsController');
