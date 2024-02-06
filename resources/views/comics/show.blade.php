@extends('layouts.app')

@section('main-content')
<article class="card w-50 text-center mx-auto p-4 ">
    <h1>
        {{ $comic->title }}
        </h1>
        <div class="card-image">
            <img class="w-50" src="{{  $comic->thumb }}" alt="{{ $comic->title }}'s img">
        </div>
        <p>
            Description:{{ $comic->description }}
        </p>
        <p>
            Price: {{ $comic->price }}
        </p>
        <p>
            Series: {{ $comic->series }}
        </p>                           
    </div>
</article>
@endsection