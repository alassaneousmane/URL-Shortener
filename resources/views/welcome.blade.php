@extends('layouts.base')


@section('content')
 <h1>The best URL Shortener just out there !!!!!</h1>

 <form method="post">
    <input type="text" placeholder="Enter your original URL here">
    <input type="submit" value="Shorten URL">
 </form>
@stop