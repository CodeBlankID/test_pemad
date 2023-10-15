<?php

namespace Modules\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $table = 'lang';
    protected $primaryKey = 'id';
    protected $fillable = [
    'code',
    'name',
    'is_deleted',
    'created_at',
    'updated_at'
    ];
}