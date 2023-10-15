<?php

namespace Modules\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    use HasFactory;

    protected $table = 'klien as a';
    protected $primaryKey = 'id';
    protected $fillable = [
    'member_id',
    'project_id',
    'is_deleted',
    'created_at',
    'updated_at'

    ];
}