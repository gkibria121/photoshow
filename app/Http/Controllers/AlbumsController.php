<?php

namespace App\Http\Controllers;
use App\models\Album;
use App\models\photo;

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'except' => ['home']
        ]);
    }

    public function index(){
        $album = Album::with('Photos')->get();
        return view('albums.index')->with('album',$album);

    }
    public function create(){
        return view('albums.create');
    }
    public function store(Request $request){
       $this->validate($request ,
       ['name' => 'required',
       'cover_image' => 'required|image:max=1999'
    ]);
    $filenameWithExt= $request->file('cover_image')->getClientOriginalName();
    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    $extension = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
    $filenameToStore = $filename.'_'.time().'.'.$extension;

    $path = $request->file('cover_image')->storeAs('album_covers',$filenameToStore);
    $album = new Album;
    $album -> name = $request->input('name');
    $album -> cover_image = $filenameToStore;
    $album -> description = $request->input('description');
    $album->save();
   return redirect('/albums')->with('success','Album created successfully');
    }
    public function show($id){
        $album = Album::with('photos')->find($id);
        return view('albums.show')->with('album',$album);
    }
    public function home(){




        return view('home');

     }
}
