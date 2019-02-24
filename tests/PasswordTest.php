<?php
/**
 * Created by PhpStorm.
 * User: cxs
 * Date: 2019-02-24
 */

use PHPUnit\Framework\TestCase;
use Xuanyue\Hasher\CheckPassword;

class PasswordTest extends TestCase
{
    public $checkObj;

    public function setUp()
    {
        $this->checkObj = new CheckPassword();
    }

    /**
     * @test
     */
    public function checkPassword()
    {
        $password = 'cxs';
        $this->assertEquals(md5($password), $this->checkObj->check($password));
    }
}