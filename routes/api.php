<?php

use Arifplugin\Arifpay\Http\Controllers\NotifyController;
use Illuminate\Support\Facades\Route;

Route::get('/posts/{post}', [NotifyController::class, 'show'])->name('posts.show');

