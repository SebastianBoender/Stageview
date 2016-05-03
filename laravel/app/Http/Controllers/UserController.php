<?php



namespace App\Http\Controllers;

use Request;

use App\Users;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;



class UserController extends Controller
{

   public function index()
   {
      $user=Users::all();
      return view('users.index',compact('user'));
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

      //Schema::table('books', function ($table) {
      //$table->softDeletes();
//});
   }

}