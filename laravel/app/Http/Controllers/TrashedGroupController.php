<?php

namespace App\Http\Controllers;

use Request;

use App\Groups;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;


class TrashedGroupController extends Controller
{  
   public function index()
   {
      $groups=Groups::onlyTrashed()->paginate(100);
      return view('groups.trashed',compact('groups'));
   }

   public function restore($id)
   {
	   $groups=Groups::onlyTrashed()->find($id);
	   $groups->restore();
      return redirect('trashed-groups');
   }

   public function destroy($id)
   {
      $groups=Groups::onlyTrashed()->find($id);
      $groups->forceDelete();
      return redirect('trashed-groups');
   }
}