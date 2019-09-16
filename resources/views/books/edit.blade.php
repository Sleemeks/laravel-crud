@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('book.update', $book->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Book Name:</label>
          <input type="text" class="form-control" name="book_name" value="{{ $book->book_name }}" />
        </div>
        <div class="form-group">
          <label for="name">Book Author:</label>
          <input type="text" class="form-control" name="book_author" value="{{ $book->book_author }}" />
        </div>
        <div class="form-group">
          <label for="price">Book Price :</label>
          <input type="text" class="form-control" name="book_price" value="{{ $book->book_price }}" />
        </div>
        <div class="form-group">
          <label for="quantity">Book Quantity:</label>
          <input type="text" class="form-control" name="book_qty" value="{{ $book->book_qty }}" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection