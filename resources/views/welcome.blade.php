@extends('layouts.base')


@section('content')


 <form method="post" action="/" class="form-signin">
     <img class="mb-4 img-circle" src="https://cdn.codeclouds.com/wp-content/uploads/2017/05/017_Know-Why-Laravel-is-Considered-the-Best-PHP-Framework_1200630.jpg" alt="" width="122" height="92">

     <h1 class="h4 mb-12 font-weight-normal">Merci d'entrer votre URL</h1> <br>     

    {{ csrf_field() }}    
    <label for="url" class="sr-only">URL</label>
    <input type="text" name="url" id="url" class="form-control" placeholder="Enter your original URL here" value="{{ old('url') }}" style="width: 90%">
    {!! $errors->first('url', '<br><p class="alert alert-danger">:message</p>') !!}
    <br>
	<hr style="width: 100%">
   
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
 </form>
@stop