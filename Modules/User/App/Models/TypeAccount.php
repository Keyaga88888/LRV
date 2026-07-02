<?php

namespace Modules\User\App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAccount extends Model
{
    protected $table = 'type_accounts';

    protected $fillable = [
        'name',
        'description',
    ];

    // cho thể hiện mối quan hệ với bảng User.php=DB users
    public function users()
    { // hasMany-thể hiện mối quan hệ 1 bộ phận nhiều user
        return $this->hasMany(User::class, 'type_account_id'); // liên kết với bảng type_accounts = User::class
    }
}
