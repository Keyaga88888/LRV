<?php

// viết function thay cho UserController.php

namespace Modules\User\App\Repositories\Interfaces;

use Illuminate\Http\Request;
use Modules\User\App\Models\User;

// use Illuminate\Support\Facades\Request;//kodc dùng cái này

interface UserRepositoryInterface
{
    public function getFilters(): array; // vào route/wed.php

    public function getUsersData(Request $request);

    public function fromOptions(): array;
    // function ko có truy vấn data thì khỏi cho vào

    // public function store(Request $request);
    public function store(array $validated): User;

    public function update(array $validated, User $user): bool;

    public function destroy(User $user): bool;
}
