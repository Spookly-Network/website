{!! Arr::get($blok, '_editable', '') !!}
@section('className', 'blog')

@section('meta-tags')
    <meta name="description" content="{{$blok["description"]}}">
    <meta property="og:title" content="{{$blok['header_text']}} - spookly.de" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{$blok["header_image"]["filename"]}}" />

    <meta name="twitter:title" content="{{$blok['header_text']}} - spookly.de">
    <meta name="twitter:description" content="{{$blok["description"]}}">
    <meta name="twitter:image" content="{{$blok["header_image"]["filename"]}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection

<section class="container-fluid index-header-image position-relative mb-5"
         style="background: url('{{$blok["header_image"]["filename"]}}'),linear-gradient(180deg,transparent,rgba(0,0,0,.5)) top;">
    <div class="container d-flex align-bottom">
        <h1 class="index-header-text position-absolute" style="bottom: 3vh;">
            {{$blok['header_text']}}
        </h1>
    </div>
</section>

@foreach ($blok['body'] as $blok)
    <x-dynamic-component :component="$blok['component']" :blok="$blok" class="mt-4"/>
@endforeach
