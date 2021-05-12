@extends('base')

@section('title')
    Join
@endsection

@section('content')
    <section class="py-0 h-75">
        <div class="container-fluid container-join" style="height: 82vh">
            <div class="container align-self-center">
                <div class="row justify-content-center align-self-center">
                    <div class="col-md-12 text-center">
                        <img src="{{asset('/images/minecraft.svg')}}" width="390px" class="img-fluid" style="margin: 1rem 0rem 4rem 0rem">
                    </div>
                    <div class="col-lg-5">
                        <h3>Join</h3>
                        <p>In Minecraft, go to <span>Multiplayer</span>, then <span>Add Server</span></p>
                        <p>Enter the IP <span>zayon.de</span> into the address bar and hit done.</p>
                    </div>
                    <div class="col-lg-5">
                        <h5>Server Adresse</h5>
                        <input class="join-ip" data-clipboard-text="zayon.de" value="zayon.de" id="serverIp" readonly="">
                        <span class="ip-caret"></span>
                        <div class="join-buttons">
                            <a class="btn btn-block mc-button join-button" id="copiedBtn" onclick="if (!window.__cfRLUnblockHandlers) return false; copyIp()" href="#">Copy to clipboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        function copyIp() {
          var copyText = document.getElementById("serverIp");
          copyText.select();
          copyText.setSelectionRange(0, 99999)
          document.execCommand("copy");
        }
    </script>
@endsection
