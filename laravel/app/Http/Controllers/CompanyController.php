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
use Auth;


     

class CompanyController extends Controller
{



   public function index()
   {
      //return teacherAuth();
      $companies=Company::all();
      return view('companies.companies',compact('companies'));
   }

      public function companies()
   {
      // teacherAuth();
      $companies=Company::all();
      return view('companies.index',compact('companies'));
   }

   public function create()
   {
      return view('companies.create');
   }

   public function store()
   {
      $company=Request::all();
      Company::create($company);
      return redirect('companies');
   }

   public function show($id)
   {
      $company=Company::find($id);
      return view('companies.show',compact('company'));
   }

 
   public function edit($id)
   {
      $company=Company::find($id);
      return view('companies.edit',compact('company'));
   }

   public function update($id)
   {
     $companyUpdate=Request::all();
     $company=Company::find($id);
     $company->update($companyUpdate);
     return redirect('companies');
   }

   public function destroy($id)
   {
      $company=Company::find($id);
      $company->delete();
      return redirect('companies/admin');
   }
}