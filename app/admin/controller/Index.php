<?php
/**
 * auther Marke
 * time 2020/3/11 17:05
 */


namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
class Index extends BaseController
{
    public function index()
    {
        return View::fetch();
    }
}