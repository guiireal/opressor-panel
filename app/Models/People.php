<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'peoples';

    protected $fillable = [
        'name',
        'document',
        'document_secondary',
        'birthdate',
        'mother_name',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
