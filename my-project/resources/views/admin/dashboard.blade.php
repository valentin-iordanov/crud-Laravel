@extends('admin.layouts')

@section('content')
    <div class="container" style="margin-top: 15%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Books</div>
                    <div class="card-body">
                        <a href="/add-book" class="btn btn-primary mb-3">Add Book</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->price }}</td>
                                        <td>
                                            <p><a href="/edit-book/{{ $book->id }}"><button>Edit</button></a></p>
                                            <form action="/delete-book/{{ $book->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
