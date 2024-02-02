@extends('layouts.app')

@section('titre')
Ajouter un article
@endsection

@section('contenu')

<div>
	<ul>
	@foreach($errors->all() as $error)
		<li class="alert alert-danger"> {{$error}} </li>
	@endforeach

	</ul>
</div>


<div class="container">
	<form  action="{{route('update')}} " method="post">
@csrf
	<input type="hidden" id="id" name="id" value="{{$article->id}} ">
	<label class="form-control"  for="titre" >Titre </label>
	<input class="form-control"  type="text" name="titre" id="titre" value="{{$article->titre}} ">
	<label class="form-control"  for="Contenu" >Contenu</label>
	<textarea name="contenu" class="form-control" >{{$article->contenu}} </textarea>
	<button class="form-control btn btn-info" name="ajouterA"> Ajouter</button>

</form>

</div>






@endsection

