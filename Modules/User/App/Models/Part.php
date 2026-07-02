<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = [
        'name',
    ];

    // cho thể hiện mối quan hệ với bảng User.php=DB users
    public function users() // hasMany-thể hiện mối quan hệ 1 bộ phận nhiều user
    {return $this->hasMany(User::class, 'part_id'); // liên kết với bảng users = User::class
    }
}
