@extends('layouts/template')

@section('content')
 <h1>Stageview admin</h1>
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
     @foreach ($users as $user)
         <tr>
             <td>{{ $user->name }}</td>
             <td>{{ $user->email }}</td>
             <td>{{ $user->created_at }}</td>
             <td>{{ $user->role }}</td>
             <td>{{ $user->active }}</td>
             <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $user->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>
@endsection