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
      if (Auth::user()->role !== 'admin') {
         echo '<script>window.location.href = "/login?error=login";</script>';
      }


    }

     function isStudent(){
      if (Auth::user()->role != 'inactive') {
         echo '<script>window.location.href = "/login?error=login";</script>';
      }

    }


     function isLoggedIn(){
      if (Auth::guest()) {
        echo '<script>window.location.href = "/login?error=login";</script>';
      }
    }


class GroupController extends Controller
{



   public function index()
   {
      $groups=Groups::all();
      return view('groups.index',compact('groups'));
   }


   public function create()
   {
      return view('groups.create');
   }

   public function store()
   {
      $group=Request::all();
      Groups::create($group);
      return redirect('groups');
   }


 
   public function edit($id)
   {
      $group=Groups::find($id);
      return view('groups.edit',compact('group'));
   }

   public function update($id)
   {
     $groupUpdate=Request::all();
     $group=Groups::find($id);
     $group->update($groupUpdate);
     return redirect('groups');
   }

   public function destroy($id)
   {
      $group=Groups::find($id);
      $group->delete();
      return redirect('groups');
   }
}