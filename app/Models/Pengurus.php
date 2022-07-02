<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    protected $guarded = ['id'];
    protected $with =['devisi'];
    use HasFactory;


    public function devisi()
    {
        return $this->belongsTo(devisi::class);
    }
}
