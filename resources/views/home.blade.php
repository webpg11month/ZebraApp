@extends('layouts.app')

@section('content')

{{-- @include('layouts.app') --}}
<body>
    <div class="all">
    @foreach ($pages as $page)
    <div class="main-center-images" >
        <img class="" src="{{ asset('/storage/images/'.$page->images) }}" alt="Responsive image">
        <h1>{{ $page->text }}</h1>
    </div>
    @endforeach
    </div>
    <div class="pager-links">
        {{ $pages->appends(request()->input())->render() }}
    </div>
</body>
</html>
@endsection
