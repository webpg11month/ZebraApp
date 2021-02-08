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
    <style>
        .test{
            margin-left: 50vw;
        }
    </style>

</head>
<body>
    @foreach ($pages as $page)
    <div class="main-center-images" >
        <img class="" src="{{ asset('/storage/images/'.$page->images) }}" alt="Responsive image">
        <h1>{{ $page->text }}</h1>
    </div>
    @endforeach
    <div class="pager-links">
        {{ $pages->appends(request()->input())->render() }}
    </div>
    <div class="testaaa" style="margin-left:50vw;font-size:20px">
        {{ $message }}
    </div>
</body>
</html>
@endsection
