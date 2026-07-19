<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    // khai báo BaseController ở controller mặc định > cho Spatie permission  > tránh lỗi permission() trong module controller
    // dung middleware permission trong routes trong module ròi thì không cần dùng cái này
    //  dùng cái này khi phân quyền trong function _contruct trong controller trong module
}
