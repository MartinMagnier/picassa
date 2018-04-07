@extends('layouts.app')

@section('content')

    @include("_photos", ['photos' => $photos])

@endsection