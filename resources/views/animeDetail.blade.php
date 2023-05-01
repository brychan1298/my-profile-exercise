@extends('master')
@section('title', 'Anime`s Detail')

@section('description', 'This is page for Anime`s Detail')
@section('keyword', 'Anime`s detail Personal Review')
@section('content')
    <style>
        .god-tier-label {
            background-color: #ED2939;
            opacity: 0.8;
            padding: 5px 15px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);
        }
    </style>
    <div style="margin-top: 100px;margin-left:20%;margin-right:20%;margin-bottom:100px">
        <div class="container border">
            <div class="god-tier-label d-inline-block">
                GOD Tier Anime
            </div>
            <div class="mt-3">
                <h3>
                    {{$anime['AnimeName']}}
                </h3>
            </div>
            <h6>
                Genre : {{$anime['Genre']}}
            </h6>
            <h6>
                Rating : {{$anime['Rating']}} (based on MyAnimeList)
            </h6>
            <img src="{{$anime['Image']}}" class="rounded card-image"
                                style="max-width:100%;object-fit:contain;">
            <div class="my-4">
                {{$anime['Synopsis']}}
            </div>
            <div class="mb-4">
                {{$anime['Review']}}
            </div>
            <div>
                {{$anime['Reason']}}
            </div>
        </div>
    </div>

@endsection
