<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopModel;

class ShopController extends Controller
{
    public function get_all_products()
    {
        $all_products = ShopModel::all();
        return view("all_products", compact('all_products'));
    }

    
}
