<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Commentaire;

class Article extends Model
{
    use HasFactory;

    protected $fillable=['titre','contenu'];


  public function comments()
    {
        return $this->hasMany(Commentaire::class);
    }

}
