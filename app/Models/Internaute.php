<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    use HasFactory;
    protected $table = "INTERNAUTE";
    protected $fillable = ['NOMINTER', 'PRENOMINTER', 'EMAILINTER', 'MDPINTER', 'TELINTER', 'ADRESSEINTER', 'DATENAISSINTER', 'CREDIT'];
    protected $primaryKey = 'IDINTERNAUTE';
    public $timestamps = false;
}
