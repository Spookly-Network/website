{!! Arr::get($blok, '_editable', '') !!}
<section class="py-0">
    <div class="container">
        @foreach ($blok['body'] as $blok)
            <x-dynamic-component :component="$blok['component']" :blok="$blok" />
        @endforeach
    </div>
</section>
