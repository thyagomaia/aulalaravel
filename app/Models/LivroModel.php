<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LivroModel extends Model
{
    protected $table = 'livro';
    protected $primaryKey = 'id';
    protected $fillable = ['nome'];
}
