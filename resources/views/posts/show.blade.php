@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="/storage/{{$post->user->profile->image}}" alt="" class="w-100 rounded-circle"
                                 style="max-width: 40px">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a style="color: black" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                                <a href="" class="pl-3">Follow</a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <p>
                            <span class="font-weight-bold">
                                <a style="color: black"
                                   href="/profile/{{$post->user->id}}">{{$post->user->username}}</a>
                            </span> {{$post->caption}}
                    </p>
                    <a href="">Folllow</a>

                </div>
            </div>
        </div>
    </div>
@endsection
