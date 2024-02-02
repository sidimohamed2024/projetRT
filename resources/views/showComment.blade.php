@extends('layouts.app')

@section('titre')
Details d'un Article
@endsection

@section('contenu')
<div class="container">


@if(session('status'))
	<div class="alert alert-secondary">{{session('status')}} </div>
@endif

<div>
	@if(session('miseA'))
			<div class="alert alert-success">{{session('miseA')}} </div>


	@endif		
</div>

<div>
	@if(session('suppA'))
			<div class="alert alert-success">{{session('suppA')}} </div>


	@endif		
</div>


<div class="d-grid gap-2 col-6 mx-auto"> <a class="btn btn-primary" href="{{route('ajouterArticle')}}"> Ajouter un commentaire </a></div>

<table class="table table-dark">
<tr class="table table-dark"><td><h3>Coomentaire</h3></td> <td><h3>Modification</h3></td><td><h3>Suppression</h3></td> </tr>
@forelse($article->comments as $comment )
<tr class="table table-warning"><td>{{ $comment->comment }} </td>  <td>   <td><a class="btn btn-success" href=" ">Editer</a> </td><td><a class="btn btn-danger" href="">Supprimer</a>  </td></tr>

@empty
<h1>Pas de Commentaire</h1>

@endforelse
<tr><tr>
</table>


<div></div>
</div>

@endsection

