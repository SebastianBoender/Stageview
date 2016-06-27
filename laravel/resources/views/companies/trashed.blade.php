@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="/companies/admin" class="btn btn-success">Go back</a>
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
          <?php
            $id = $company->id;
         ?>
         <tr>
             <td>{{ $company->id }}</td>
             <td>{{ $company->compName }}</td>
             <td>{{ $company->title }}</td>
             <td>{{ $company->author }}</td>
             <td>{{ $company->publisher }}</td>
             <td><img src="{{asset('img/'.$company->image.'')}}" height="45" width="45"></td>
             {!! Form::open(['method'=>'POST', 'url' => '/trashed-companies/restore/'.$id]) !!}
             <td>{!! Form::submit('Undelete', ['class' => 'btn btn-warning']) !!}</td>
             {!! Form::close() !!}
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['trashed-companies.destroy', $company->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>


@endsection