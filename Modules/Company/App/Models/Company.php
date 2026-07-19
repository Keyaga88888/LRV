<?php

namespace Modules\Company\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Attendance\App\Models\Attendance;
use Modules\User\App\Models\User;

class Company extends Model
{
    protected $fillable = [
        'name',
        'code',
        'phone',
        'email',
        'address',
        'status',
    ];

    // cho thể hiện mối quan hệ với bảng User.php=DB users
    public function users() // hasMany-thể hiện mối quan hệ 1 bộ phận nhiều user
    {
        return $this->hasMany(User::class);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }
}
// Đúng DDD thì Company là Aggregate riêng.
// Company là một thực thể (Entity) độc lập giống như:

// User
// Attendance
// Salary
// Part
// Position
// Team

// Một công ty có thể dùng cho rất nhiều module.
