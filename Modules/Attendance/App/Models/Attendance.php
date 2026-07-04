<?php

namespace Modules\Attendance\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Attendance\App\Scopes\CompanyScope;
use Modules\Attendance\Database\Factories\AttendanceFactory;
use Modules\User\App\Models\User;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Builder;

class Attendance extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [

        'company_id',

        'user_id',

        'work_date',

        'check_in',

        'check_out',

        'late_minutes',

        'work_hours',

        'overtime_hours',

        'status',
        'approval_status',
        'approved_at',
        'approved_by',
    ];

    protected $casts = [

        'work_date' => 'date',

        'check_in' => 'datetime',

        'check_out' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'user_id'
        );
    }

    //     public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()

            ->logOnly([
                'company_id',
                'user_id',
                'check_in',
                'check_out',
                'late_minutes',
                'work_hours',
                'overtime_hours',
                'status',
                'approval_status',
                'approved_by',
                'approved_at',
            ])

            ->logOnlyDirty();

    }

    protected static function newFactory()
    {
        return AttendanceFactory::new();
    }

    protected static function booted()
    {
        static::addGlobalScope(
            new CompanyScope
        );
    }

// khai báo type để Larastan hiểu.

public function scopeToday(Builder $query): Builder
{
    return $query->whereDate('work_date', today());
}

public function scopePending(Builder $query): Builder
{
    return $query->where('status', 0);
}

public function scopeApproved(Builder $query): Builder
{
    return $query->where('status', 1);
}

public function scopeRejected(Builder $query): Builder
{
    return $query->where('status', 2);
}
}

// php artisan make:export AttendanceExport
