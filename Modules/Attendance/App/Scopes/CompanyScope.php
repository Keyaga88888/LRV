<?php

namespace Modules\Attendance\App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;
use Modules\User\App\Models\User;

class CompanyScope implements Scope
{
    public function apply(
        Builder $builder,
        Model $model
    ): void {

        /** @var User|null $user */
        $user = Auth::user();

        if ($user) {
            $builder->where(
                'company_id',
                $user->company_id
            );
        }
    }
}
