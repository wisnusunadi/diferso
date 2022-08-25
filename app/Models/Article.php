<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'artikel';
    public $timestamps = false;
    protected $fillable = ['user_id','judul','media','isi','status','meta_desc','slug','created_at'];

    public function User(){
        return $this->belongsTo(User::class);
    }


    public function Category()
    {
        return $this->belongsToMany(Category::class, 'kategori_artikel','artikel_id','kategori_id');
    }
}
