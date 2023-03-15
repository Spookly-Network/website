@extends('base')
@section('title')
    {{ $story->name }} | Spookly.de
@endsection
@section('content')
    <body class="antialiased">
        <x-dynamic-component :component="$story->content['component']" :blok="$story->content" class="mt-4"/>
    </body>
@endsection
