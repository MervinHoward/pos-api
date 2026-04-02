<?php

namespace App\Traits;

use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

trait HasAuditLog
{
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        // Secara otomatis mengambil nama tabel sebagai log_name
        return LogOptions::defaults()
            ->logAll()
            ->useLogName($this->getTable())
            ->logOnlyDirty();
    }
}
