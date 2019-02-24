<?php
/**
 * Created by PhpStorm.
 * User: cxs
 * Date: 2019-02-24
 */

namespace Xuanyue\Hasher;



class CheckPassword
{
    public function check($password = '', $yanzhi = '')
    {
        return $yanzhi ? md5($password.$yanzhi) : md5($password);
    }
}