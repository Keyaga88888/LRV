<?php

// namespace Modules\User\App\Models;

// // use Illuminate\Database\Eloquent\Model;
// // use Illuminate\Database\Eloquent\Factories\HasFactory;
// // use Modules\User\Database\Factories\UserFactory;

// // class User extends Model
// // {
// //     use HasFactory;

// //     /**
// //      * The attributes that are mass assignable.
// //      */
// //     protected $fillable = [];

// //     // protected static function newFactory(): UserFactory
// //     // {
// //     //     // return UserFactory::new();
// //     // }
// // }

// // namespace App\Models;

// // use Illuminate\Contracts\Auth\MustVerifyEmail;
// // use App\Models\Part;
// // use App\Models\Position;
// // use App\Models\Team;
// // use App\Models\TypeAccount;

// // use Illuminate\Database\Eloquent\Attributes\Fillable;
// // use Illuminate\Database\Eloquent\Attributes\Hidden;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;
// use Modules\User\App\Models\Part;
// use Modules\User\App\Models\Position;
// use Modules\User\App\Models\Team;
// use Modules\User\App\Models\TypeAccount;
// use Modules\User\Database\Factories\UserFactory;

// // #[Fillable(['name', 'email', 'password'])]
// // #[Hidden(['password', 'remember_token'])]
// class User extends Authenticatable
// {
//     /** @use HasFactory<UserFactory> */
//     use HasFactory, Notifiable;
//     protected static function newFactory()
//     {
//         return \Modules\User\Database\Factories\UserFactory::new();
//     }
//     /**
//      * Get the attributes that should be cast.
//      * @ var list<string>
//      * cho phép dc tương tác các cột trong DB
//      * @return array<string, string>
//      */
//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//         'birthday',
//         'sex',
//         'part_id',
//         'position_id',
//         'type_work',
//         'team_id',
//         'phone',
//         'address',
//         'status',
//         'start_day',
//         'end_day',
//         'type_account_id',

//     ];

//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     // thêm function để thể hiện các mối quan hệ
//     // tạo váo Models/Part để ánh xạ với bảng parts trongDB
//     public function part()
//     {
//         return $this->belongsTo(Part::class, 'part_id');
//     }
//     // tạo váo Models/Position để ánh xạ với bảng positions trongDB
//     public function position()
//     {
//         return $this->belongsTo(Position::class, 'position_id');
//     }
//     // tạo váo Models/Team để ánh xạ với bảng teams trongDB
//     public function team()
//     {
//         return $this->belongsTo(Team::class, 'team_id');
//     }
//     // tạo váo Models/typeAccount để ánh xạ với bảng type_accounts trongDB
//     public function typeAccount()
//     {
//         return $this->belongsTo(TypeAccount::class, 'type_account_id');
//     }

//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
//         ];
//     }
// }

// namespace Modules\User\App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Notifications\Notifiable;

// use Modules\User\App\Models\Part;
// use Modules\User\App\Models\Position;
// use Modules\User\App\Models\Team;
// use Modules\User\App\Models\TypeAccount;

// class User extends Authenticatable
// {
//     use HasFactory, Notifiable;

//     protected $fillable = [
//         'name',
//         'email',
//         'password',
//         'birthday',
//         'sex',
//         'part_id',
//         'position_id',
//         'type_work',
//         'team_id',
//         'phone',
//         'address',
//         'status',
//         'start_day',
//         'end_day',
//         'type_account_id',
//     ];

//     protected $hidden = [
//         'password',
//         'remember_token',
//     ];

//     protected $casts = [
//         'email_verified_at' => 'datetime',
//         'password' => 'hashed',
//     ];

//     public function part()
//     {
//         return $this->belongsTo(Part::class, 'part_id');
//     }

//     public function position()
//     {
//         return $this->belongsTo(Position::class, 'position_id');
//     }

//     public function team()
//     {
//         return $this->belongsTo(Team::class, 'team_id');
//     }

//     public function typeAccount()
//     {
//         return $this->belongsTo(TypeAccount::class, 'type_account_id');
//     }
// }

namespace Modules\User\App\Models;

use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Attendance\App\Models\Attendance;
use Modules\Salary\App\Models\SalaryMechanism;
use Spatie\Permission\Traits\HasRoles;

/**
 * @property-read Part|null $part
 * @property-read Position|null $position
 * @property-read Team|null $team
 * @property-read TypeAccount|null $typeAccount
 */
class User extends Authenticatable implements MustVerifyEmailContract
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use MustVerifyEmail;
    use Notifiable; // HasRoles ?

    protected $fillable = [
        'thumbnail',
        'name',
        'email',
        'password',
        'birthday',
        'sex',
        'part_id',
        'position_id',
        'type_work',
        'team_id',
        'phone',
        'address',
        'status',
        'start_day',
        'end_day',
        'type_account_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function part(): BelongsTo
    {
        return $this->belongsTo(Part::class, 'part_id');
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function typeAccount(): BelongsTo
    {
        return $this->belongsTo(TypeAccount::class, 'type_account_id');
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(
            Attendance::class,
            'user_id'
        );
    }

    public function salaryMechanisms(): HasMany
    {
        return $this->hasMany(
            SalaryMechanism::class,
            'user_id'
        );
    }
}
