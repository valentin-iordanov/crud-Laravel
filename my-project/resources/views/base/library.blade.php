@extends('base.layouts')

@section('title', 'my books')

@section('content')
    <!-- end header -->
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>My Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Library -->
    <div class="Library">
        {{-- card start --}}
        @foreach ($books as $book)
            <div class="card">
                <img src="{{ asset('base/images/book-2.jpg') }}" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>Title: {{ $book['title'] }}</b></h4>
                    <h3>Price: {{ $book['price'] }}</h3>
                </div>
            </div>
        @endforeach
        {{-- card end --}}
    </div>
    <!-- end Library -->
    @endsection
