<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'kategori';
    public $timestamps = false;
    protected $fillable = ['nama'];


    public function Article()
    {
        return $this->belongsToMany(Article::class, 'kategori_artikel','kategori_id','artikel_id');
    }
}
