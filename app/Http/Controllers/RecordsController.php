<?php

namespace App\Http\Controllers;

use App\Record;
use App\Genre;
use App\Photo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $records = Record::paginate(5);
        return view('admin.records.index', compact('records'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $record = new Record;
        $genres = Genre::all();
        return view('admin.records.create', compact('record', 'genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:2|unique:records,name',
            'artist' => 'required|min:2|unique:records,artist',
            'label' => 'required|min:2|unique:records,label',
            'description' => 'required|min:2',
            'price' => 'required|numeric',
        ]);

        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Record::create($input);

        return redirect('admin/records');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        
        $record = Record::findOrFail($id);
        $genres = Genre::all();
        return view('admin.records.edit', compact('record','genres'));
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
        $request->validate([
            'name' => 'required|min:2',
            'artist' => 'required|min:2',
            'label' => 'required|min:2',
            'description' => 'required|min:2',
            'price' => 'required|numeric',
        ]);
        $record = Record::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $record->update($input);
        return redirect('admin/records');
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
        $record = Record::findOrFail($id);
        if($record->photo_id){  
        unlink(public_path() . $record->photo->file);
        }
        $record->delete();
        Session::flash('deleted_record','The record has been deleted');
        return redirect('admin/records');
    }
}
