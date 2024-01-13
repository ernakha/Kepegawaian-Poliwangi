<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinlur extends Model
{
    use HasFactory;
    protected $table = 'dinlurs';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public function details()
    {
        return $this->hasMany(Anggdin::class, 'id_anggdin', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
