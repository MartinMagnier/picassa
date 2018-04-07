@extends('layouts.app')

@section('content')

    <style>.addPic{display: none;} .publications_album .publication_title{display: none;} .publications_album hr{display: none;}</style>

    <div class="publications_album">
        <strong>
            {{$album->name}}

            <mark>{{count($album->photos)}}</mark>

        </strong>

        <hr style="display: block!important;">



        <p>{{$album->description}}</p>


        @include('_photos', ['photos'=>$album->photos])

    </div>

@endsection