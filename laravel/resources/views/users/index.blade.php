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
     @foreach ($user as $users)
         <tr>
             <td>{{ $users->name }}</td>
             <td>{{ $users->email }}</td>
             <td>{{ $users->created_at }}</td>
             <td>{{ $users->role }}</td>
             <td>{{ $users->active }}</td>
             <td><a href="{{route('users.edit',$users->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['users.destroy', $users->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>
@endsection