<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table ='guru'; //pake protected soalnya pk bhs indonesia

    protected $fillable =['nama','telepon','alamat'];

    public function mapel()
    {
    	return $this->hasMany(Mapel::class); //satu guru punya banyak mapel
    }

    }
