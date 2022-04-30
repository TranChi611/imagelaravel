<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function sendImage()
    {
        return response()->file(public_path("/storage/product_1.jpg"));
    }
}
