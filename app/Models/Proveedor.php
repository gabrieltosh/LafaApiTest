<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='proveedors';
    protected $fillable=[
        'name',
        'address',
        'nit',
        'phone',
        'status'
    ];
}
