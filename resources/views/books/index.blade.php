@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Manage <b>Books</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ route('book.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons"></i> <span>Add New Book</span></a>					
					</div>
                </div>
            </div>
  <table class="table table-striped table-hover">
    <thead>
        <tr>
          <th>ID</th>
          <th>Book Name</th>
          <th>Book Author</th>
          <th>Book Price</th>
          <th>Book Quantity</th>
          <th colspan="2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->book_name}}</td>
            <td>{{$book->book_author}}</td>
            <td>{{$book->book_price}}</td>
            <td>{{$book->book_qty}}</td>
            <td>
            	<a href="{{ route('book.edit',$book->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('book.destroy', $book->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection