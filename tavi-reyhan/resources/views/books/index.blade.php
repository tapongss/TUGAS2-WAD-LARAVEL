<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- Tombol Logout -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <h1>Daftar Buku</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }} - {{ $book->author }}</li>
        @endforeach
    </ul>

</body>
</html>
