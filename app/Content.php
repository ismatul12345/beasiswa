<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
   protected $table = 'content';
   protected $fillable =[
   	'id', 'judul', 'deskripsi', 'syarat', 'tanggal',
   ];
}
