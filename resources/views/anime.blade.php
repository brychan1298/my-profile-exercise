@extends('master')
@section('title', 'My Anime Personal`s Review with Tier')

@section('description', 'This my page for review anime with its Tier')
@section('keyword', 'Anime`s Personal Review')
@section('content')
    <style>
        .card-anime {
            position: relative;
            overflow: hidden;
        }

        .anime-title{
            height: 7vh;
        }

        .card-tier-god {
            position: absolute;
            border: 3px solid white;
            color: white;
            top: 4%;
            right: 4%;
            background-color: #ff0015;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
            box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);
        }

        .card-tier-good {
            position: absolute;
            border: 3px solid white;
            color: white;
            top: 4%;
            right: 4%;
            background-color: #d3d61d;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
        }

        .card-tier-meh {
            position: absolute;
            border: 3px solid white;
            color: white;
            top: 4%;
            right: 4%;
            background-color: #a6a6a6;
            padding: 4px 17px;
            border-radius: 10px;
            font-weight: bold;
            font-size: 17px;
        }

        .card-image {
            display: block;
            transition: all 0.25s ease;

        }

        .card-anime:hover .card-image {
            -webkit-transform: scale(1.1)
        }

        .mallogo {
            width: 2rem;
            height: 2rem;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>
    <div class="text-center" style="margin-top:120px">
        <h1 style="margin:10px 400px">
            My Favourite Anime and My Personal Review About It
        </h1>
        <p style="padding: 0 30%;font-size:16px">
            In this section, I will present a list of the latest anime that I have watched over the past few months or
            years. In this list, I will provide reviews for each anime and categorize them based on my personal ratings,
            namely
            :
        <ul>
            <li>
                <label class="fs-4" style="color:#ff0015">GOD Tier : </label> It means I rate the anime very, very well.
            </li>
            <li>
                <label class="fs-4" style="color:#d3d61d">GOOD Tier : </label> It means the anime is kinda good based on my personal
                opinion.
            </li>
            <li>
                <label class="fs-4" style="color:#a6a6a6">MEH Tier : </label> It means i could sleep while watching this anime ^-^.
            </li>
        </ul>
        </p>
        <p style="padding: 0 30%;font-size:16px">
            When you click on any of the anime titles, you will be redirected to a detailed page about that anime, which
            will include a synopsis, my personal review, and the reasons why I placed that anime in that particular tier.
        </p>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($animes as $anime)
                <div class="p-4 col-lg-4">
                    <a href="/AnimeDetail/{{$anime['id']}}" class="text-decoration-none">
                        <div class="rounded card-anime" style="box-shadow: 0px 10px 30px rgba(38, 45, 118, 20%);">
                            <img src="{{$anime['Image']}}" class="rounded card-image"
                                style="width:600px;height:200px;">
                            @if ($anime['Tier'] == '1')
                                <div class="card-tier-god">
                                    GOD Tier
                                </div>
                            @elseif($anime['Tier'] == '2')
                                <div class="card-tier-good">
                                    GOOD Tier
                                </div>
                            @else
                                <div class="card-tier-meh">
                                    MEH Tier
                                </div>
                            @endif
                            <div class="p-3">
                                <h4 class="anime-title">{{ $anime['AnimeName'] }}</h4>
                                <p class="text-secondary h-5">
                                    Genre : {{ $anime['Genre'] }}
                                </p>
                            </div>
                            <div class="px-3 d-flex justify-content-between">
                                <div>
                                    Year : {{ $anime['Year'] }}
                                </div>
                                <div class="d-flex align-self-center">
                                    <img src="anime/mal.png" alt="" class="mallogo">
                                    <p>
                                        {{ $anime['Rating'] }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
