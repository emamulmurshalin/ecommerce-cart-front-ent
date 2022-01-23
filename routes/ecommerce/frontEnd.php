<?php

use App\Http\Controllers\Ecommerce\FrontEnd\FrontEndController;
use Illuminate\Support\Facades\Route;

Route::get('/products/list', [FrontEndController::class, 'productView'])
    ->name('product.view');
