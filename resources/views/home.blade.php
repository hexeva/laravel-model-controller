@extends('layouts/app')

@section('page_title')
    HOMEPAGE
@endsection

@section('main_content')
    <div class="container">
        <div class="movie-list">
            @foreach ($movies as $movie)
                 @include('components.card',['movies'=>$movies])
            @endforeach
        </div>
    </div>
@endsection



