<?php

use CodeFusion\contact\Http\Controller\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::group(['namespace' => 'CodeFusion\contact\Http\Controller'],function() {

  Route::get('contact',[ContactController::class,'index'])->name('contact');
  Route::post('contact',[ContactController::class,'send'])->name('contact.send');

});