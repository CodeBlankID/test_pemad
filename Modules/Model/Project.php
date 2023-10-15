<?php

namespace Modules\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $primaryKey = 'id';
    protected $fillable = [
    'user_id',
    'nama',
    'tipe',
    'field',
    'kategori',
    'description',
    'lang_id',
    'is_deleted',
    'created_at',
    'updated_at'

    ];
}