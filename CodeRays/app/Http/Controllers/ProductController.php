<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'The Shawshank Redemption', 'genre' => 'Drama', 'year' => 1994],
            ['title' => 'The Godfather', 'genre' => 'Crime', 'year' => 1972],
            ['title' => 'The Dark Knight', 'genre' => 'Action', 'year' => 2008],
            ['title' => 'Pulp Fiction', 'genre' => 'Crime', 'year' => 1994],
            ['title' => 'The Lord of the Rings: The Return of the King', 'genre' => 'Fantasy', 'year' => 2003],
        ];

        return view('products.index', compact('products'));
    }
}
