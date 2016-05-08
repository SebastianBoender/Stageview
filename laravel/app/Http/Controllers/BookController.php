<?php

namespace App\Http\Controllers;

use Request;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;
use Auth;


     function teacherAuth(){
      if (Auth::guest()) {
        echo '<script>window.location.href = "/login?error=login";</script>';
      }
      elseif (Auth::user()->role == 'student') {
        echo '<script>window.location.href = "/login?error=login";</script>';
      }
      elseif (Auth::user()->role == 'NULL') {
        echo '<script>window.location.href = "/login?error=login";</script>';
      }
    }

     function adminAuth(){

     

      if (Auth::user()->role != 'admin') {
         echo '<script>window.location.href = "/login?error=login";</script>';
      }


    }

     function isStudent(){


      if (Auth::user()->role == 'inactive') {
         echo '<script>window.location.href = "/login?error=login";</script>';
      }

    }


     function isLoggedIn(){


      if (Auth::guest()) {
        echo '<script>window.location.href = "/login?error=login";</script>';
      }
    }


class BookController extends Controller
{

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */



   public function index()
   {
      adminAuth();
      $books=Book::all();
      return view('books.companies',compact('books'));
   }

      public function companies()
   {
      adminAuth();
      $books=Book::all();
      return view('books.index',compact('books'));
   }

   public function create()
   {
      return view('books.create');
   }

   public function store()
   {
      $book=Request::all();
      Book::create($book);
/*
      // getting all of the post data

      $file = array('image' => Input::file('image'));

      // setting up rules

      $rules = array('image' => 'required',); //jpeg,bmp,png and size max:10000

      // doing the validation, passing post data, rules and the messages

      $validator = Validator::make($file, $rules);

      if ($validator->fails()) {

        // send back to the page with the input data and errors
        // return Redirect::to('upload')->withInput()->withErrors($validator);

        return $validator;
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
      } */


      return redirect('books');
   }

   public function show($id)
   {
      $book=Book::find($id);
      return view('books.show',compact('book'));
   }

 
   public function edit($id)
   {
      $book=Book::find($id);
      return view('books.edit',compact('book'));
   }

   public function update($id)
   {
     $bookUpdate=Request::all();
     $book=Book::find($id);
     $book->update($bookUpdate);
     return redirect('books');
   }

   public function destroy($id)
   {
      $book=Book::find($id);
      $book->delete();
      return redirect('books/admin');
   }
}