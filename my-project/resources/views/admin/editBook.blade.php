@extends('admin.layouts')

@section('content')
    <div class="container" style="margin-top: 15%;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Book</div>

                    <div class="card-body">
                        <form action="/edit-book/{{ $book->id }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $book->price }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection