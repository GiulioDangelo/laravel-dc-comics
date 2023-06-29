<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function show($id){
        $comic = Comic::find($id);

        return 'fumetto singolo';
    }

    public function show($id){
        $comic = Comic::find($id);

        return view('comics.create');
    }
}
