<?php

namespace Modules\Product\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        /** @var view-string $view */
        $view = 'product::index';

        return view($view);
    }

    public function create()
    {
        /** @var view-string $view */
        $view = 'product::create';

        return view($view);
    }

    public function store(Request $request) {}

    public function show($id)
    {
        /** @var view-string $view */
        $view = 'product::show';

        return view($view);
    }

    public function edit($id)
    {
        /** @var view-string $view */
        $view = 'product::edit';

        return view($view);
    }

    public function update(Request $request, $id) {}

    public function destroy($id) {}
}
