<?php

namespace App\Models;

use App\Traits\HasAuditLog;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'uuid', 'category_id', 'price', 'stock'])]
class Product extends Model
{
    use HasAuditLog;
    
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function transactionDetails(): HasMany {
        return $this->hasMany(TransactionDetail::class);
    }
}
