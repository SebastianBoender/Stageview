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

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
   

   public function index()
   {
      $books=Book::onlyTrashed()->paginate(100);;
      return view('books.trashed',compact('books'));
   }

   public function restore($id)
   {
   	  $book=Book::find($id);
   	  $book->restore();
      return redirect('books');
   }

   public function destroy($id)
   {
      $book=Book::find($id);
      $book->forceDelete();
      return redirect('trashed-books');
   }
}