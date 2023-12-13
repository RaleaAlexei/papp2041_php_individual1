<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'masini';

    protected $fillable = ['brand', 'model', 'combustibil', 'cilindri', 'transmisie', 'anul'];
}