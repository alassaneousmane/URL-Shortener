@extends('layouts.base')


@section('content')


 <form method="post" action="/" class="form-signin" style="margin-top: 360px">
     <img class="mb-4 img-fluid" src="https://cdn.codeclouds.com/wp-content/uploads/2017/05/017_Know-Why-Laravel-is-Considered-the-Best-PHP-Framework_1200630.jpg"
          alt="" width="170" height="120">

     <h1 class="h4 mb-12 font-weight-normal">Merci d'entrer votre <i>URL</i></h1> <br>     

    {{ csrf_field() }}    
    <label for="url" class="sr-only">URL</label>
    <input type="text" name="url" id="url" class="form-control" placeholder="Enter your original URL here" value="{{ old('url') }}" style="width: 100%">
    {!! $errors->first('url', '<br><p class="alert alert-danger">:message</p>') !!}
    <br>
   	<input type="submit" class="btn btn-primary" value="CLIQUER POUR RACCOURCIR">


     <table class="table table-striped " style="margin-left: -100px;margin-top: 10px">
         <thead>
         <tr>
             <th scope="col"># {{ $urls->count() }} / SHORTENED URL IN DB</th>
         </tr>
         </thead>
         <tbody>
         @foreach($urls as $url)
             <tr>
                 <td>#{{ $url->id }} <a href="{{ $url->url }}">{{ $url->url }}</a></td>
             </tr>
         @endforeach
         </tbody>
     </table>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
 </form>
@stop
