<?php

namespace App\Http\Controllers\guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(5);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validazione
        $request->validate([
            'title'         => 'string|required',
            'description'   => 'string',
            'thumb'         => 'string',
            'price'         => 'string',
            'series'        => 'string',
            'sale_date'     => 'date',
            'type'          => 'string',
        ]);

        $data = $request->all();
        $newComic = new Comic();

        $newComic->title        = $data['title'];
        $newComic->description  = $data['description'];
        $newComic->thumb        = $data['thumb'];
        $newComic->price        = $data['price'];
        $newComic->series       = $data['series'];
        $newComic->sale_date    = $data['sale_date'];
        $newComic->type         = $data['type'];
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);

        return view('comics.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $request->validate([
            'title'         => 'string|required',
            'description'   => 'string',
            'thumb'         => 'string',
            'price'         => 'string',
            'series'        => 'string',
            'sale_date'     => 'date',
            'type'          => 'string',
        ]);

        $comic->title        = $data['title'];
        $comic->description  = $data['description'];
        $comic->thumb        = $data['thumb'];
        $comic->price        = $data['price'];
        $comic->series       = $data['series'];
        $comic->sale_date    = $data['sale_date'];
        $comic->type         = $data['type'];
        $comic->update();


        return to_route('comics.index',['comic' => $comic ->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index')->with('success', $comic);
    }

    public function restore($id){
        Comic::withTrashed()->where('id',$id)->restore();

        $comic = Comic::find($id); 

       return to_route('comics.index')->with('restore_success',$comic);
    }

    public function trash(){
        $trash = Comic::onlyTrashed()->paginate(5);
        return view('comics.trash',compact('trash'));
    }

    public function hardDelete($id){
        $comic = Comic::withTrashed()->find($id);
        $comic->forceDelete();
        
        return to_route('comics.trash')->with('success', $comic);
    }
}
