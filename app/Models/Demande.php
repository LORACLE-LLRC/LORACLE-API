<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = "DEMANDE";
    protected $fillable = ['IDINTERNAUTE','NUMSERVICE'];
    protected $primaryKey = 'IDDEMANDE';
    public $timestamps = false;
}
