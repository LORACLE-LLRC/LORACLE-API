<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internaute extends Model
{
    use HasFactory;
    protected $table = "INTERNAUTE";
    protected $fillable = ['IDINTERNAUTE', 'NOMINTER', 'PRENOMINTER', 'EMAILINTER', 'TELINTER', 'ADRESSEINTER', 'DATENAISSINTER', 'CREDIT'];
}
