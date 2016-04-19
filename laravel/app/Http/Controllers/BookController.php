<?php

namespace App\Http\Controllers;

use Request;

use Validator;
use Redirect;
use Session;
use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   public function index()
   {
      $books=Book::all();
      return view('books.companies',compact('books'));
   }

      public function companies()
   {
      $books=Book::all();
      return view('books.index',compact('books'));
   }


   /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
   public function create()
   {
      return view('books.create');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
   public function store()
   {
      $book=Request::all();
      
      // getting all of the post data
      $file = array('image' => Input::file('image'));
      // setting up rules
      $rules = array('image' => 'required',); //jpeg,bmp,png and size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return Redirect::to('upload')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
      if (Input::file('image')->isValid()) {
        $destinationPath = '../public/img'; // upload path
        $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
        $fileName = rand(11111,99999).'.'.$extension; // renameing image
        Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
        // sending back with message
        Session::flash('success', 'Upload successfully'); 
      
        return Redirect::to('upload');
      }
      else {
        // sending back with error message.
        Session::flash('error', 'uploaded file is not valid');
        return Redirect::to('upload');
      }
    }

      Book::create($book);

      return redirect('books');
   }
   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function show($id)
   {
      $book=Book::find($id);
      return view('books.show',compact('book'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
   public function edit($id)
   {
      $book=Book::find($id);
      return view('books.edit',compact('book'));
   }
   /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function update($id)
   {
     $bookUpdate=Request::all();
     $book=Book::find($id);
     $book->update($bookUpdate);
     return redirect('books');
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
   public function destroy($id)
   {
      Book::find($id)->delete();
      return redirect('books');
   }
}
