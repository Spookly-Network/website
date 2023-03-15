{!! Arr::get($blok, '_editable', '') !!}
<div class="material-display">
    <div class="upper-image">
        <img src="{{$blok["image"]["filename"]}}" alt="">
    </div>
    <div class="label">
        {{$blok["label"]}}
    </div>
</div>
