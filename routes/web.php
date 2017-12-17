<?php

Route::group(["prefix" => "pessoas"], function () {
	Route::get("/", "PessoasController@index");
});