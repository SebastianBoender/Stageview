@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="{{url('/companies/create')}}" class="btn btn-success">Creëer bedrijf</a>
 <a href="/trashed-companies" class="btn btn-warning">See Deleted</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Bedrijfsnaam</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
         <th>Thumb</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($companies as $company)
         <tr>
             <td>{{ $company->id }}</td>
             <td>{{ $company->compName }}</td>
             <td>{{ $company->title }}</td>
             <td>{{ $company->author }}</td>
             <td>{{ $company->publisher }}</td>
             <td><img src="{{asset('img/'.$company->image.'')}}" height="45" width="45"></td>
             <td><a href="{{url('companies',$company->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('companies.edit',$company->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['companies.destroy', $company->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>


@endsection