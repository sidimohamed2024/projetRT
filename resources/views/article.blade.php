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


<div class="d-grid gap-2 col-6 mx-auto"> <a class="btn btn-primary" href="{{route('ajouterArticle')}}"> Ajouter un article </a></div>
<h1>Liste des articles</h1>
<table class="table table-dark">
<tr class="table table-dark"><td><h3>Titre</h3></td><td><h3>Contenu</h3></td> <td><h3>Modification</h3></td><td><h3>Suppression</h3></td> </tr>
@foreach($article as $element )
<tr class="table table-warning"><td><a href="{{route('showComment',['id'=>$element->id])}}">{{ $element->titre }}</a>  </td>  <td> {{ $element->contenu }} </td>  <td><a class="btn btn-success" href="{{route('editer',['id'=>$element->id])}} ">Editer</a> </td><td><a class="btn btn-danger" href="{{route('supprimerA',['id'=>$element->id])}}">Supprimer</a>  </td></tr>



@endforeach
<tr><tr>
</table>


<div>{{$article->links()}} </div>
</div>

@endsection

