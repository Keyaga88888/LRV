<?php

namespace Modules\Product\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/** @var view-string $view */
$view = 'product::index';

return view($view);

    /**
     * Show the form for creating a new resource.
     */
/** @var view-string $view */
$view = 'product::create';

return view($view);

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
/** @var view-string $view */
$view = 'product::show';

return view($view);

    /**
     * Show the form for editing the specified resource.
     */
/** @var view-string $view */
$view = 'product::edit';

return view($view);
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
