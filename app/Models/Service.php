<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = "SERVICE";
    protected $fillable = ['IDTHEME', 'INTITULE', 'DESCRIPTIFSERVICE', 'VILLESERVICE', 'PHOTOSERVICE', 'DATEHDEB', 'DATEHFIN'];
}
