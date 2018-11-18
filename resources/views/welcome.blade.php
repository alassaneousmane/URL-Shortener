@extends('layouts.base')


@section('content')


 <form method="post" class="form-signin">
     <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
     <h1 class="h3 mb-3 font-weight-normal">Merci d'entrer votre URL</h1>
    {{ csrf_field() }}    
    <label for="url" class="sr-only">URL</label>
    <input type="text" name="url" id="url" class="form-control" placeholder="Enter your original URL here"><br><br>
    <input type="submit" value="Shorten URL"class="btn btn-lg btn-primary btn-block">
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
 </form>
@stop