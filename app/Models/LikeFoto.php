<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeFoto extends Model
{
    use HasFactory;
    protected $fillable = ['FotoId', 'UserId', 'TanggalLike'];
    public function album ()
    {
        return $this->belongsTo(Album::class,'FotoId');
    }
    public function user ()
    {
        return $this->belongsTo(User::class,'UserId');
    }
    
}
