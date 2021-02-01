@extends('base')

@section('title')
    Lobby Map
@endsection

@section('content')
    <section class="p-0 h-75">
        <div class="container-fluid" style="height: 82vh">
            <iframe src="https://zayon.de/dynmap/?worldname=world&mapname=surface&zoom=1&x=2055&y=64&z=2055" frameborder="0" height="100%" width="100%"></iframe>
        </div>
    </section>
@endsection
