<?php


namespace app\controller;

use app\BaseController;
use think\Request;

class Demo extends BaseController
{
    public function show()
    {
		$result = [
			"status" => 1,
			"message" => "ok",
			"result" => [
				"id" => 1
			],
		];

		$header = [
			"Token" => "123456"
		];

		return json($result, 201, $header);
    }

    public function request() {
	    dump($this->request->get());
    }
}