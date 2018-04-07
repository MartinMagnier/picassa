@extends('layouts.app')

@section('content')

    <br>
    <style>
        header
        {
            height: auto;
            grid-template-rows: 1fr;
        }

        header form
        {
            display: none;
        }

        header .info
        {
            display: none;
        }
    </style>

    @auth

        <h3 class="user-name">{{$utilisateur->photos->name}}</h3>



        {{count($utilisateur->ilsMeSuivent)}}
        {{count($utilisateur->jeLesSuit)}}
        {{count($utilisateur->photo)}}

        @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle class="follow">Arreter de suivre</a>
            @else
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle class="follow">Suivre</a>
            @endif
        @endif

    @endauth

    @include('_photos', ['photo'=>$utilisateur->photo])

@endsection