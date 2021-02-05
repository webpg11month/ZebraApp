@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <title>Zebra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
<<<<<<< HEAD
    
=======
    @foreach($pages as $page)
        {{ $page->text }}
        <img src="{{ asset('strorage/image/'.$page->images) }}" alt="cpt">
    @endforeach

>>>>>>> 27cd3bca0ae7568453f9cf0653e9f0e24f957a1b
</body>
</html>
@endsection
