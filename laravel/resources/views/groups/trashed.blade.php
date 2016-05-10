@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="/groups" class="btn btn-warning">Go back</a>
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
             {!! Form::open(['method'=>'POST', 'url' => '/trashed-groups/restore/'.$group->id]) !!}
             <td>{!! Form::submit('Undelete', ['class' => 'btn btn-warning']) !!}</td>
             {!! Form::close() !!}
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