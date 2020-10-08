@extends('layouts.main')

@section('pathCss')
    <link rel="stylesheet" href="./css/app.css">
@endsection

<x-header></x-header>

@section('content')

<h1 class="mb-5 mt-5">Premier League 2020</h1>

<x-standings :teamsStats="$teamsStats"></x-standings>

<x-played-games :matches="$matches" :currentDate="$currentDate"></x-played-games>

@endsection

