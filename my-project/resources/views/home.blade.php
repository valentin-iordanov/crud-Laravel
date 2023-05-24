<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @auth
        <p>ti si lognat brat</p>

        <form action="/logout" method="POST">
            @csrf
            <button>logout</button>
        </form>

        <h2>Create book</h2>
        <form action="/create-book" method="POST">
            @csrf
            <input name="title" type="test" placeholder="title">
            <input name="price" type="text" placeholder="price">
            <button>Create book</button>
        </form>

        <div style="border: 3px solid black;">
            <h2>All books</h2>
            @foreach ($books as $book)
                <div style="background-color: gray">
                    <h3>Title: {{ $book['title'] }}</h3>
                    <h3>Price: {{ $book['price'] }}</h3>
                    <p><a href="/edit-book/{{ $book->id }}">Edit</a></p>
                    <form action="/delete-book/{{ $book->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="test" placeholder="username">
            <input name="email" type="email" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="name" type="test" placeholder="username">
            <input name="password" type="password" placeholder="password">
            <button>Login</button>
        </form>

    @endauth
</body>

</html>
