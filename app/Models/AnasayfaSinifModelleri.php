<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AnasayfaSinifModelleri extends Model
{
    use SoftDeletes;
    protected $table="sinif";
    protected $fillable=['sinif','sinif_category'];
    public function kategori()
    {
        return $this->hasOne('App\Models\AnasayfaModelleri','id','sinif_category');
    }
}
