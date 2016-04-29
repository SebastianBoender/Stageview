@extends('layouts/template')

<?php
    $users = DB::table('users')->get();
?>

@section('content')
 <h1>Stageview admin</h1>
 <a href="{{url('/users/create')}}" class="btn btn-success">Creëer gebruiker</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Email</th>
         <th>Creation Date</th>
         <th>Active</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->id }}</td>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->created_at }}</td>
             @if ($user->active == 0)
             <td>No</td>
             @else
             <td>Yes</td>
             @endif
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $user->id]]) !!}
             @if ($user->active == 1)
             {!! Form::submit('Disable', ['class' => 'btn btn-danger']) !!}
             @else
             {!! Form::submit('Enable', ['class' => 'btn btn-success']) !!}
             @endif
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>
@endsection