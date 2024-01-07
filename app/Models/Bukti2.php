<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukti2 extends Model
{
    use HasFactory;
    protected $table = 'bukti2s';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
