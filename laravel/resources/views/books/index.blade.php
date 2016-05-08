@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="{{url('/books/create')}}" class="btn btn-success">Creëer bedrijf</a>
 <a href="/trashed-books" class="btn btn-warning">See Deleted</a>
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
     @foreach ($books as $book)
         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->compName }}</td>
             <td>{{ $book->title }}</td>
             <td>{{ $book->author }}</td>
             <td>{{ $book->publisher }}</td>
             <td><img src="{{asset('img/'.$book->image.'')}}" height="45" width="45"></td>
             <td><a href="{{url('books',$book->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>


@endsection