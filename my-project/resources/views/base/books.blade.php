@extends('base.layouts')

@section('title', 'books')

@section('content')
    <div class="about-bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="abouttitle">
                        <h2>Our Books</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Books -->
    <div class="Books">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                            minim veniam, quis nostrud exercitation ullamco laboris</span>
                    </div>
                </div>
            </div>
            <div class="row box">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    {{-- card start --}}
                    @foreach ($books as $book)
                        <div class="card">
                            <img src="{{ asset('base/images/book-2.jpg') }}" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b>Title: {{ $book['title'] }}</b></h4>
                                <h3>Price: {{ $book['price'] }}</h3>
                                <form action="/buy-book/{{ $book->id }}" method="POST">
                                    @csrf
                                    <Button>Buy</Button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    {{-- card end --}}
                </div>
                <div class="col-md-6 offset-md-3">
                    <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
