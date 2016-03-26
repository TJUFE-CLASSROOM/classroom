<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		session(null);
		$this -> display();
	}

	public function login($id, $password) {
		$this -> success('登录成功', __MODULE__ . '/Index');

		//		$AdminInfo=M("AdminInfo");
		//		$map['id'] = $id;
		//		$result=$AdminInfo->where($map)->getField('password');
		//		if( $result && $result==$password ){
		//			session("id",$id);
		//			//记录登录颁发的令牌
		//			session("token",guid());
		//			$this->success('登录成功', '__MODULE__/Index');
		//		}else{
		//			$this->error('登录失败');
		//		}
	}

}
