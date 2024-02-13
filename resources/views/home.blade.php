@extends('layout.app')

@section('content')
    <div class="bg_dark">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-2 p-2">
                        <div class="card">
                            <a href="{{route('detail-comic', ['id' => $comic['id']])}}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                <img src="{{$comic['thumb']}}" class="card-img-top" alt="{{$comic['title']}}">
                                <div class="card-body">
                                    <p class="card-title ">{{$comic['title']}}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection