<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    
    protected $table = "tb_guest";

    protected $primaryKey = 'guestno';

    protected $guarded = [];

}
