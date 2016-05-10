@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="{{url('/groups/create')}}" class="btn btn-success">Creëer groep</a>
 <a href="/trashed-books" class="btn btn-warning">See Deleted</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>naam</th>
         <th>Creëer datum</th>
         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($groups as $group)
         <tr>
             <td>{{ $group->id }}</td>
             <td>{{ $group->name }}</td>
             <td>{{ $group->created_at }}</td>
             <td><a href="{{route('groups.edit', $groups->id)}}" class="btn btn-warning">Edit</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['groups.destroy', $group->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>


@endsection