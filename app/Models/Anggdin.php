<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggdin extends Model
{
    use HasFactory;
    protected $table = 'anggdins';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function dinlurs(){
        return $this->belongsTo(Dinlur::class, 'dinlurs_id', 'id');
    }
    
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
