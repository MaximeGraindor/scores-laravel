@extends('layouts.main')

@section('pathCss')
    <link rel="stylesheet" href="../css/app.css">
@endsection

<x-header></x-header>

@section('content')
    @auth
        <x-new-match :teams="$teams"></x-new-match>
    @endauth
@endsection