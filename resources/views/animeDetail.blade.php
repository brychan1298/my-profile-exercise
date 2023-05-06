@extends('master')
@section('title', 'Anime`s Detail')

@section('description', 'This is page for Anime`s Detail')
@section('keyword', 'Anime`s detail Personal Review')
@section('content')
    <style>
        .god-tier-label {
            border: 3px solid white;
            color: white;
            background-color: #ff0015;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);
        }
        .good-tier-label {
            border: 3px solid white;
            color: white;
            background-color: #d3d61d;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);
        }

        .meh-tier-label {
            border: 3px solid white;
            color: white;
            background-color: #a6a6a6;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);
        }
    </style>
    <div style="margin-top: 100px;margin-left:20%;margin-right:20%;margin-bottom:100px">
        <div class="container">
            @if ($anime['Tier'] == 1)
            <div class="god-tier-label d-inline-block">
                GOD Tier Anime
            </div>
            @elseif($anime['Tier'] == 2)
            <div class="good-tier-label d-inline-block">
                GOOD Tier Anime
            </div>
            @else
            <div class="meh-tier-label d-inline-block">
                MEH Tier Anime
            </div>
            @endif

            <div class="mt-3">
                <h3>
                    {{$anime['AnimeName']}}
                </h3>
            </div>
            <h6>
                Genre : {{$anime['Genre']}}
            </h6>
            <h6>
                Rating : <label class="text-primary">{{$anime['Rating']}}</label> (based on <label class="text-primary">MyAnimeList</label>)
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
