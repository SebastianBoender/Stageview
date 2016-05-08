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


class TrashedBookController extends Controller
{  
   public function index()
   {
      $books=Book::onlyTrashed()->paginate(100);;
      return view('books.trashed',compact('books'));
   }

   public function restore($id)
   {
   	  $book=Book::onlyTrashed()->find($id);
   	  $book->restore();
      return redirect('trashed-books');
   }

   public function destroy($id)
   {
      $book=Book::onlyTrashed()->find($id);
      $book->forceDelete();
      return redirect('trashed-books');
   }
}