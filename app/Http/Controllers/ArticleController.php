<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

use App\Rules\Exp;
class ArticleController extends Controller
{
    //
   public function index() {
        return view('articles');
    }

    public function showArticle(){
        $article=Article::paginate(8);

        return view('article',compact('article'));
    }

    public function contact() {
        return view('contact');
    }
    public function ajouterArticle() {
        return view('ajoutA');
    }

    public function saveArticle(Request $requette){
        $requette->validate(['titre'=>['required'],'contenu'=>'required']);
            $article=new Article();
            $article->titre=$requette->titre;
            $article->contenu=$requette->contenu;

            $article->save();
            return redirect('afficchez-articles')->with('status','cet article a été ajouté avec succès');

    }

    public function editerArticle($id){
            $article=Article::find($id);

        return view('editer',compact('article'));
    }

    public function updateArticle(Request $requette){

        $article=Article::find($requette->id);
        $article->update(['titre'=>$requette->titre, 'contenu'=>$requette->contenu]);

        return redirect('afficchez-articles')->with('miseA','cet article a été modifié avec succès');
    }


public function supprimerArticle($id){
        $article=Article::findOrFail($id);
        $article->delete();

        return redirect('afficchez-articles')->with('suppA','Article supprimé avec succès');

}
}
