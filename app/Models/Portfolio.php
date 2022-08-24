<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = 'portfolio';
    public $timestamps = false;
    protected $fillable = ['nama','tahun','jenis','deskripsi','link','media','created_at'];

}
