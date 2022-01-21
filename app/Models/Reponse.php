<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;
    protected $table = "REPONSE";
    protected $fillable = ['IDINTERNAUTEP', 'IDINTERNAUTER', 'NUMSERVICE', 'LIBELLEREP', 'DATEREPONSE'];
    protected $primaryKey = 'IDREP';
    public $timestamps = false;
}
