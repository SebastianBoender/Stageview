<?php

namespace App\Http\Controllers;

use Request;

use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;
use Redirect;
use Session;


class TrashedcompanyController extends Controller
{  
   public function index()
   {
      $companies=Company::onlyTrashed()->paginate(100);;
      return view('companies.trashed',compact('companies'));
   }

   public function restore($id)
   {
   	  $company=Company::onlyTrashed()->find($id);
   	  $company->restore();
      return redirect('trashed-companies');
   }

   public function destroy($id)
   {
      $company=Company::onlyTrashed()->find($id);
      $company->forceDelete();
      return redirect('trashed-companies');
   }
}