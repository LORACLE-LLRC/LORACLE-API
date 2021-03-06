<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table = "OFFRE";
    protected $fillable = ['IDINTERNAUTE','NUMSERVICE'];
    protected $primaryKey = 'IDOFFRE';
    public $timestamps = false;
}
