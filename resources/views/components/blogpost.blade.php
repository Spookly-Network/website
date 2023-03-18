{!! Arr::get($blok, '_editable', '') !!}
@section('className', 'blog')

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
