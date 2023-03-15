{!! Arr::get($blok, '_editable', '') !!}
<div class="row">
    @foreach ($blok['body'] as $blok)
        <div class="col-xxl-2 col-md-4 col-6 mb-4">
            <x-dynamic-component :component="$blok['component']" :blok="$blok"/>
        </div>
    @endforeach
</div>
