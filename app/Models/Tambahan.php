<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahan extends Model
{
    use HasFactory;

    protected $table = 'tambahans';

    protected $primaryKey = 'id_tambahan';

    protected $guarded = [];
}
