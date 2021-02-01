@extends('base')

@section('title')
    Zayon.de - Minigames auf eine neue art.
@endsection

@section('content')
    <section class="container-fluid index-header-image position-relative">
        <div class="container d-flex align-bottom">
            <h1 class="index-header-text position-absolute">
                <span>MINIGAMES</span><br>
                auf eine neue art.
            </h1>
        </div>
    </section>
    <section class="container index-header-cards mb-5">
        <div class="row">
            <div class="col-12 col-md-4 py-2">
                <a href="https://zayon.de/gamemode/lobby/map">
                    <div class="card bg-dark text-white">
                        <img src="/images/cards/dynmap.png" class="card-img" alt="...">
                        <div class="card-img-overlay">
                            <div class="card-body pb-0">
                                <h5 class="card-title">Endecke unsere Lobby</h5>
                                <p class="card-text text-truncate">auf unserer Interaktiven karte.</p>
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
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural
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
                                <p class="card-text text-truncate">This is a wider card with supporting text below as a
                                    natural
                                    lead-in to
                                    additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="container index-section-tmargin">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2 class="index-body-headline">Wir brauchen deine Hilfe!</h2>
                <p>Wir sind gerade erst in der Alpha, und wir brauchen deine Unterstüzung den Server so gut wie möglich Bugfrei zu bekommen.
                Und du kannst uns helfen, und bekommst sogar ein cooles Badge in deinem Profil! Also hilf uns bei dem Kampf gegen die Bugs.</p>
                <a target="_blank" href="https://github.com/Zayon-Network/Zayon-Network/issues/new/choose" class="btn btn-outline-danger"><i
                        class="fab fa-github" aria-hidden="true"></i> Bug Reporten</a>
            </div>
            <div class="col-12 col-md-6">
                <img src="/images/npc-render/npc_2.png" width="100%">
            </div>
        </div>
    </section>

    <section class="container-fluid index-section-tmargin px-0" style="height: 90vh">
        <!-- Slider main container -->
        <div class="swiper-container h-100">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide slide-knockknock">
                    {{--                    <img class="map-screen" src="/images/map-render/knockknock/atlantis_01.png" alt="">--}}
                    <div class="slide-content container d-flex align-items-center h-100">
                        <div>
                            <mark class="index-body-headline py-0" style="color: #FFAA00">Knock Knock</mark>
                            <h4>Das "AHHHHHHHH", "OMG WO" und "DU *-*#*" Steckt im Namen.</h4>
                            <a href="{{url('/gamemode/knock-knock')}}" class="btn btn-secondary btn-lg mt-5">Zu KnockKnock</a>
                        </div>
                        <img src="/images/npc-render/npc_3.png" alt="" style="position: absolute;right: -30vw;">
                    </div>
                </div>

                <div class="swiper-slide slide-bingo">
                    <div class="slide-content container d-flex align-items-center h-100">
                        <div>
                            <mark class="index-body-headline py-0" style="color: #00AAAA">Bingo</mark>
                            <h4>Kennst du dich wirklich so gut aus wie dein Gehirn denkt 🤔.</h4>
                            <a href="{{url('/gamemode/bingo')}}" class="btn btn-secondary btn-lg mt-5">Zu Bingo</a>
                        </div>
                        <img src="/images/npc-render/npc_4.png" alt="" style="position: absolute;right: -30vw;">
                    </div>
                </div>

                <div class="swiper-slide slide-skywars">
                    <div class="slide-content container d-flex align-items-center h-100">
                        <div>
                            <mark class="index-body-headline py-0" style="color: #00AA00">Skywars</mark>
                            <h4>Der gleiche Rage mit einer kleinen veränderung.</h4>
                            <a href="{{url('/gamemode/skywars')}}" class="btn btn-secondary btn-lg mt-5">Zu Skywars</a>
                        </div>
                        <img src="/images/npc-render/npc_6.png" alt="" style="position: absolute;right: -30vw;">
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <section class="container index-section-tmargin px-0 pt-5 pt-xl-0" style="margin-bottom: 25vh">
        <div class="row align-items-center">
            <div class="col-12 col-md-7 col-lg-7 ml-md-auto">
                <h1>Zayon.de - Auch auf anderen Platformen</h1>
                <p class="lead">Finde uns auf Instagramm, Twitter, Discord und alle anderen dienste wo wir unseren Socialmedia mist hochladen.
                Auch auf Buttgram kannst du uns finden <small class="text-muted">(Also wenn du die Seite irgendwo findest sag uns bescheid, wir haben den Link Irgendwie verloren)</small>.
                Auch auf GitHub sind wir vertreten und nehmen dort gerne eure Bugs und Feature-Requests an <br>Wir sehen uns im Netz!</p>

                <p class="mt-2">
                    <a target="_blank" href="https://twitter.com/zayonde" class="mx-2 social-icon"><i
                            class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://discord.gg/3nAPaZg" class="mx-2 social-icon"><i
                            class="fab fa-discord" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.instagram.com/zayonde" class="mx-2 social-icon"><i
                            class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://github.com/Zayon-Network/Zayon-Network" class="mx-2 social-icon"><i
                            class="fab fa-github" aria-hidden="true"></i></a>
                </p>
            </div>

            <div class="col-10 col-sm-6 col-md-5 col-lg-4 m-auto pt-5 pt-md-0">
{{--                <img alt="image" class="img-fluid rounded-0" src="./img/draws/server_landing.svg">--}}
            </div>
        </div>
    </section>

    <img src="/images/npc-render/npc_07.png" alt="" class="npc-hello">

@endsection
