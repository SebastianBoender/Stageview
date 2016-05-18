@extends('layouts/template')

@section('content')
 <h1>Stageview admin</h1>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Name</th>
         <th>Email</th>
         <th>Registration Date</th>
         <th>Role</th>
         <th>Bedrijf</th>
         <th>Active</th>
         <th colspan="6">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($user as $users)
         <tr>
             <td>{{ $users->name }}</td>
             <td>{{ $users->email }}</td>
             <td>{{ $users->created_at }}</td>
             <td>{{ $users->role }}</td>
             @if ($users->company)
             <td>{{ $users->company->compName }}</td>
             @else
             <td>Geen bedrijf</td>
             @endif

             @if($users->active == 0)
                <td>No</td>
             @else
                <td>Yes</td>
             @endif
             <td><a href="{{route('users.edit',$users->id)}}" class="btn btn-warning">Edit</a></td>
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