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


     

class BookController extends Controller
{



   public function index()
   {
      //return teacherAuth();
      $books=Book::all();
      return view('books.companies',compact('books'));
   }

      public function companies()
   {
      teacherAuth();
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