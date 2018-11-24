@extends('layouts.base')

@section('content')

<h4 class="alert alert-success">Find your URL Shortened <i>below </i></h4>
<a href="{{ config('app.url') }}/{{ $shortened }}"> {{ config('app.url') }}/{{ $shortened }}</a>
<p>{{ $generated_at->format('F, j Y, H:i:s') }}</p>
<hr>
<a href="{{ route('home') }}">Retour à l'accueil</a>

@stop