<?php
class PublicAction extends Action{
	/* 公共模块实现功能
	* 1、资源的显示（包括视频、课件、电子书的显示）
	* 2、引入验证码的导入
	********************/
	public function index(){
		$this->display('ppt');
	}
	//导入验证码
	public function code(){
		import('ORG.Util.Image');
		ob_clean();
        Image::buildImageVerify();
	}
	//显示课件内容
	public function ppt(){
		$m=M('ppt');
		$arr=$m->select();		
	    $this->assign('data',$arr);
		$this->display('ppt');
	}
	//点击列表之后能够进行下载
	public function pptreader(){
		$id=$_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	public function ebookreader()
	{
		$id=$_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	
	public function labreader()
	{
		$id=$_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	//显示电子书内容
	public function ebook(){
		$m=M('ebook');
		$arr=$m->select();		
	    $this->assign('data',$arr);
		$this->display('ebook');
	}
	
	public function video(){
		$m=M('video');
		$arr=$m->select();		
	    $this->assign('data',$arr);
		$this->display('video');
	}
	public function videoplay(){
		$id=$_GET['id'];
		$video = M('video');
		$sql = "select * from tp_video where id = $id ";
		$arr = $video->query($sql);
		$path = $arr[0]['path'];
		$this->assign('path',$path);
		$this->assign('id',$id);
		//var_dump($arr);
		
		//$this->assign('data',$arr);
		$this->display();
	}
	public function lab(){
		$m=M('lab');
		$arr=$m->select();		
	    $this->assign('data',$arr);
		$this->display('lab');
	}
	//实现搜索功能
	public function search(){
		$searchcontent = $_POST['searchcontent'];
		$resources = M('resources');
		$sql = "select * from tp_resources where title like '%$searchcontent%'";
		$arr = $resources->query($sql);
		//var_dump($arr);
		$this->assign('data',$arr);
		$this->display();
	}
	public function searchreader()
	{
		$id=$_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	
	
	
	//学习园地板块的内容显示
	public function learningarea(){
		$this->display();
	}
}