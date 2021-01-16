<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'street_name',
        'address_code',
        'number',
        'complement',
        'neighborhood',
        'address_type_id',
        'city_id'
    ];

    public function people(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }

    public function address_type(): BelongsTo
    {
        return $this->belongsTo(AddressType::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

}
