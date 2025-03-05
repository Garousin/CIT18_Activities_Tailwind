<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'My hero Academia'],
            ['title' => 'Solo Leveling'],
            ['title' => 'Demon Slayer'],
            ['title' => 'The Gate'],
            ['title' => 'One piece']
        ];

        return view('products', compact('products'));
    }
}