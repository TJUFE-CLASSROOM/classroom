<?php
namespace Admin\Controller;
use Think\Controller;
class ClassroomController extends Controller {
    public function index(){
    	$this->display();
	}
	/**
	 * 查询
	 */
	public function select(){
		
//		$page=($_POST['page'] == null || $_POST['page'] == "0") ? "1":$_POST['page'];
//		$rows=($_POST['rows'] == null || $_POST['rows'] == "0") ? "10":$_POST['rows'];
//
//		$BikeInfo=M("BikeInfo");
//
//		$map['bike_bike_info.bike_state']  = array('neq','已删除');
//
//		$count = $BikeInfo->where($map)->count();
//		$list=$BikeInfo->where($map)->order('bike_code')->page($page.','.$rows)
//		->join('left join bike_bike_type_info ON bike_bike_type_info.type_id = bike_bike_info.type_id')
//		->select();
//
//		$result["total"]=$count;
//		$result["rows"]=$list;
//
//		echo json_encode($result);
		
		$arr = array (
			"total"=>3,
			"rows"=>array(
				array("name"=>"A213"),
				array("name"=>"B214"),
				array("name"=>"H205")
			)
		);
		echo json_encode($arr);
	}
	/*
	 * 导入
	 */
	public function import(){
		
	}
	/*
	 * 修改
	 */
	public function update(){
		
	}
	/*
	 * 删除
	 */
	public function remove(){
		
	}
	/**
	 * 停用
	 */
	public function pause(){
		
	}
	/**
	 * 启用
	 */
	public function resume(){
		
	}
	
	public function showForm($index){
		$this->assign('index',$index);
		$this->display("form_tpl");
	}
}