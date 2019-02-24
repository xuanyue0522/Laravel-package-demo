<?php
/**
 * Created by PhpStorm.
 * User: cxs
 * Date: 2019-02-24
 */

namespace Xuanyue\Hasher;


use App\Http\Controllers\Controller;

class CheckPasswordBase extends Controller
{
    public function setCheckPassword($password = '')
    {
        return md5($password);
    }
}