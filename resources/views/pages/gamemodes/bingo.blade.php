@extends('base')

@section('title')
    Spiele Bingo - Spookly.de
@endsection

@section('content')
{{--    <section class="container-fluid index-header-image position-relative">--}}
{{--        <div class="container d-flex align-bottom">--}}
{{--            <h1 class="index-header-text position-absolute">--}}
{{--                <span>MINIGAMES</span><br>--}}
{{--                auf eine neue art.--}}
{{--            </h1>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="container-fluid overflow-hidden" >
        <div class="slide-bingo" style="height: 80vh">
            <div class="slide-content container d-flex align-items-center h-100">
                <div>
                    <mark class="index-body-headline py-0" style="color: #00AAAA">Bingo</mark>
                    <h4 class="w-50">Beweise dein Minecraft wissen und Gewinne gegen deine gegner nur mit Gehirnschmalz und ein bisschen Glück.</h4>
                </div>
                <img src="/images/npc-render/npc_4.png" alt="" style="position: absolute;right: -30vw;">
            </div>
        </div>
    </section>

    <section class="index-section-tpadding bg-dark w-100 pt-5" style="padding-bottom:1vh">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Unsere Maps</h2>
            </div>
            <div class="col-12 col-md-4 py-2">
                <a href="">
                    <div class="card bg-dark text-white">
                        <img src="/images/backgrounds/lobby-01.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 py-2">
                <a href="">
                    <div class="card bg-dark text-white">
                        <img src="/images/backgrounds/lobby-01.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-4 py-2">
                <a href="">
                    <div class="card bg-dark text-white">
                        <img src="/images/backgrounds/lobby-01.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>

@endsection
