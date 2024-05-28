<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leads(): HasMany
    {
        return $this->hasMany(Lead::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    
}
