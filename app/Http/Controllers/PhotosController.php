<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Photo;

class PhotosController extends Controller
{
    public function create($album_id){
        return view('photos.create')->with('album_id',$album_id);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'photo' => 'image'
        ]);

        $file = $request->file('photo');
        $filenameWithExt = $request->file('photo')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = pathinfo($filenameWithExt, PATHINFO_EXTENSION);
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('photo')->storeAs('/photos/'.$request->input('album_id'),$filenameToStore);

        $photo = new Photo;
        $photo->title = $request->input('name');
        $photo->name= $request->input('name');
        $photo->album_id = $request->input('album_id');
        $photo->description = $request->input('description');
        $photo->size = $request->file('photo')->getSize();
        $photo->photo =$filenameToStore;
        $photo->save();
        return redirect('/albums/'.$request->input('album_id'))->with('success','Photo Uploaded');



    }
    public function show($album,$id){
        $photo = Photo::find($id);
        return view('photos.show')->with('photo',$photo)->with('album',$album);

    }
    public function destroy ($album,$id){
        $photo = Photo::find($id);
        $photo->delete();
        return redirect('/albums/'.$album);

    }
    public function home(){
       return "comming soon";

    }

}
