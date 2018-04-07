@extends('layouts.app')

<style>
    header
    {
        height: auto!important;
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

@section('content')

    <section class="recherche">
        <h3 class="titre">Les utilisateurs :</h3>

        <ul class="container recherche">
            @foreach($utilisateurs as $u)
                <li class="recherche-nom"><a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a></li>
            @endforeach
        </ul>

        <h3 class="titre">Les photos :</h3>
    </section>

    @include("_photos", ['photos'=>$photos])
@endsection