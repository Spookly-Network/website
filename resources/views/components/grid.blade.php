{!! Arr::get($blok, '_editable', '') !!}
<div class="container mx-auto grid grid-cols-3 gap-12 place-items-center py-16">
    @foreach ($blok['columns'] as $blok)
        <x-dynamic-component :component="$blok['component']" :blok="$blok" />
    @endforeach
</div>
