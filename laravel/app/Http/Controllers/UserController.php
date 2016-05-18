<?php
namespace App\Http\Controllers;
use DB;
use App\Users;
use App\combineusercompany; 
use App\Books;
use Request;
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
    $user=Users::with('company')->get();
    return view('users.index',compact('user'));
 }

 public function edit($id)
 {
    $companies = DB::table('books')->get();
    $user=Users::find($id);
    return view('users.edit',compact('user', 'companies'));
 }

 public function update($id)
 {
   $companyid = $_POST['company'];
   $ifCompany = DB::table('combineusercompany')->where('user_id', $id)->get();
   if (empty($ifCompany)) {
      $newcombine = combineusercompany::create([
        'user_id' => $id,
        'company_id' => $companyid,
      ]);

      DB::table('users')->where('id', $id)->update([
        'company_id' => $companyid,
      ]);
   }
   else
   {
      DB::table('combineusercompany')->where('user_id', $id)->update([
        'user_id' => $id,
        'company_id' => $companyid,
      ]);

      DB::table('users')->where('id', $id)->update([
        'company_id' => $companyid,
      ]);
   }

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