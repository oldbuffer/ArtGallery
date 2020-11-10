<?php

namespace App\Http\Controllers;

use App\Models\Art;
use App\Models\ArtImage;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    public function show($art_id){
        $item = Art::where('id',$art_id)->first();
        $item_img = ArtImage::where('art_id',$art_id)->first();
        return view('art',[
            'item' => $item,
            'item_img' => $item_img
        ]);
    }
}
