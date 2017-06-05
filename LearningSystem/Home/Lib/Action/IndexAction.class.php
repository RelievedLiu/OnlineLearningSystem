<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	 /*默认模块实现的功能如下：
	  *1、显示首页
	  *2、退出当前登录页面
	  **************/
	public function _before_(){
		//判断用户是否登陆过 通过session
			if(isset($_SESSION['username']) && $_SESSION['username']!=' ')
			{
				$this->display();
			}
			else
			{
				//$this->display('Index/index');
				$this->redirect('Login/login');
			}
	}

    public function index(){
			//对tp_note数据库进行操作，显示公告
			$note=M('note');
			$sql="select * from tp_note where id between 1 and 5";
			$arr=$note->query($sql);
			$this->assign('data',$arr);
			
			$lab=M('lab');
			$sql2="select * from tp_lab where id between 1 and 5";
			$arr2=$lab->query($sql2);
			$this->assign('lab',$arr2);
			
			$learning=M('learning');
			$sql3="select * from tp_learning where id between 1 and 5";
			$arr3=$learning->query($sql3);
			$this->assign('learning',$arr3);
			
			$this->display();		
		}
	//退出登录
	public function quit(){
		$this->redirect('Login/login');
	}
}