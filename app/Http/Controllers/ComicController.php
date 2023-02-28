<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

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
        $newComic = new Comic();

        $form_data = $this->validation($request->all());

        $newComic->fill($form_data);
           
        $newComic->save();
 
        return redirect()->route('comics.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', $comic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validation($data){

        $validator = Validator::make($data,[
            'titolo' => 'required|max:60',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required',
        ],

        [
            'titolo.required' => 'Title is required!',
            'titolo.max' => 'Title can\'t be longer than 50 characters!',
            'description.required' => 'Description is required!',
            'thumb.required' => 'Cover image is required!',
            'price.required' => 'Price is required!',
            'series.required' => 'Serie is required!',
            'sale_date.required' => 'Date is required!',
            'sale_date.date_format' => 'Date format is wrong: YYYY-MM-DD',
            'type.required' => 'Type is required!',

        ])->validate();
        
        return $validator;
    }
}
