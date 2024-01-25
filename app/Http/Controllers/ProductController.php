<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
		public function index()
		{
			return view("product.index")->with("products",Product::all());
		}

		public function show($id)
		{
			return view("product.show")->with("product",Product::find($id));
		}
}