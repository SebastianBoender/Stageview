@extends('layouts/template')



@section('content')
 <h1>Stageview admin</h1>
 <a href="/books/admin" class="btn btn-success">Go back</a>
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
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Undelete</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['trashed-books.destroy', $book->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach



     </tbody>

 </table>


@endsection