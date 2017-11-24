<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Firstcrud;

class firstCrudController extends Controller {

 public function HomePage() {

        $data = Firstcrud::get();

        return view('firstcrud')->with( 'data',$data);
         
    }


    //
     public function store() {

     	  /*  $post = $request->all();
     	      $post["name"] === Input::get('name');
     	  */	
          $user = new Firstcrud;
          $user->uploaded_by = Input::get('name');
          $user->category    = Input::get('category');
         
         /* $fileToUpload = $_FILES['image']['name'];*/ 
         $fileToUpload = Input::file('image')->getClientOriginalName();

    	
/*$path =*/ Input::file('image')->move(public_path()."/files_uploaded/",$fileToUpload);
          $user->image = $fileToUpload;
          
          $user->save();
        
          /*get data from database and store it in $data*/
          return back()->with('success','You have successfully upload image.');
          

    }

    public function delete($id){
     //by model
    //	$delete = new Firstcrud;
    //$delete::where('id',$id)->delete();
    
   // Firstcrud::where('id',$id)->delete();
    
      
    //by find
     $delete = Firstcrud::find($id);
       $delete->delete();
    
    //by query builder
     // DB::table('firstcruds')->where('id',$id)->delete();

    	return back();
    	
    }

    public function update (Request $request, $id) {

      if($request->isMethod('post')){
         
         //preparing image to prepare
          $fileToUpload = Input::file('new_Image')->getClientOriginalName();
         Input::file('new_Image')->move(public_path()."/files_uploaded/",$fileToUpload);
      
        $update =Firstcrud::find($id);

        $update->uploaded_by =$request->input('new_Name');

        $update->category =$request->input('new_Category');

        $update->image =$fileToUpload;

        $update->save();

       
       return redirect('/');

      }else {
         $data['data'] = Firstcrud::find($id);

        return view('update_data',$data);
      }
          
    }



}
    
  



