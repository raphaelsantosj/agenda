<?php

Route::group(["prefix" => "pessoas"], function () {
	Route::get("/", "PessoasController@index");
	Route::get("/adicionar", "PessoasController@adicionarView");
	Route::get("/{id}/editar", "PessoasController@editarView");
	Route::get("/{id}/excluir", "PessoasController@excluirView");
	Route::get("/{id}/destroy", "PessoasController@destroy");
	Route::post("/store", "PessoasController@store");
	Route::post("/update", "PessoasController@update");
});