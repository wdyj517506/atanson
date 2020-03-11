<?php
/**
 * auther Marke
 * time 2020/3/11 17:34
 */


namespace app\admin\controller;

use think\captcha\facade\Captcha;
class Varify
{
    public function index()
    {
        return Captcha::create('verify');
    }
}