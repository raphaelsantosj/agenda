<?php

Route::group(["prefix" => "pessoas"], function () {
	Route::get("/", "PessoasController@index");
	Route::get("/adicionar", "PessoasController@adicionarView");
	Route::post("/store", "PessoasController@store");
});