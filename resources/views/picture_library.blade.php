@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row py-2">

        @foreach($arts as $art)
            @php
               $image = '';
               if ($art -> image) {
                    $image = $art -> image['img'];
                } else {
                    $image = 'no_image.jpg';
                }
            @endphp
            <div class="col-lg-4">
                    <figure class="caption-2 mb-0 shadow-sm border border-white border-md">
                        <img src="/images/{{$image}}" alt="{{$art->title}}" class="w-100">
                        <figcaption class="p-4 bg-white">
                            <h2 ><a class="h5 font-weight-bold mb-2 font-italic" href="{{route('show_art',[$art->id])}}">{{$art->title}}</a></h2>
                            <p class="mb-0 text-small font-italic text-muted">{{$art->description}}</p>
                        </figcaption>
                    </figure>
                </div>
        @endforeach

    </div>
    </div>
@endsection
