<?php

namespace App\Http\Controllers\Ecommerce\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function productView()
    {
        return 'Product show';
    }
}
