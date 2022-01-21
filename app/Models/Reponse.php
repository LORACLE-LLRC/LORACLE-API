<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $table = "REPONSE";
    protected $fillable = ['IDREP', 'IDINTERNAUTEP', 'IDINTERNAUTER', 'NUMSERVICE', 'LIBREPONSE', 'DATEREPONSE'];
    public $timestamps = false;
}
