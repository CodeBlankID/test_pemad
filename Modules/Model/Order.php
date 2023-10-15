<?php

namespace Modules\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order as a';
    protected $primaryKey = 'id';
    protected $fillable = [
    'klient_id',
    'tagihan',
    'payment',
    'shipping',
    'status',
    'is_deleted',
    'created_at',
    'updated_at'
    ];
}