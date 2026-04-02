<?php

namespace App\Models;

use App\Traits\HasAuditLog;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'email', 'address', 'phone'])]
class Customer extends Model
{
    use HasAuditLog;
    
    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
