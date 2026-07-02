<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'part_id',
    ];

    // cho thể hiện mối quan hệ với bảng User.php=DB users
    public function users()
    { // hasMany-thể hiện mối quan hệ 1 bộ phận nhiều user
        return $this->hasMany(User::class, 'team_id'); // liên kết với bảng users = User::class
    }

    // đặt tên function tương tự nhưng khác vơi User.php vì đây là 2 cái class khác
    public function parts()
    {
        return $this->belongsTo(Part::class, 'part_id'); // liên kết với bảng parts = Part::class
    }
}
