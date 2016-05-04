<?php
namespace App\Http\Controllers;

use App\Users;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;


class TrashedUserController extends Controller
{

 public function index()
 {
    $user=Users::onlyTrashed()->paginate(2);
    return view('users.trashed',compact('user')); 
 }

 public function edit($id)
 {
    $user=Users::find($id);
    return view('users.edit',compact('user'));
 }

 public function update($id)
 {
   $userUpdate=Request::all();
   $user=Users::find($id);
   $user->update($userUpdate);
   return redirect('users');
 }

 public function destroy($id)
 {
    Users::find($id)->Delete();
    return redirect('users');
 }

}
