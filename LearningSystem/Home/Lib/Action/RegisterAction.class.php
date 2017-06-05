<?php
	class RegisterAction extends Action{
		/****注册模块实现功能
		* 注册的实现
		*******/
		
		
		//用户注册功能
		public function register(){
			$this->display();	
		}
		
		//用户进行注册  
		public function do_register(){
			$student = M('student');
			$sname=$_POST['sname'];
			$spwd=$_POST['spwd'];
			$sno=$_POST['sno'];
			$respwd=$_POST['respwd'];
			if($student == null || $spwd == null || $sname == null || $respwd == null || $sno == null)
			{
				$this->error("请检查填的信息是否完整！");
			}
			else if($spwd != $respwd)
			{
				$this->error('密码不一致!');
			}
			$sql="insert into tp_student (stu_id,stu_name,stu_pwd) values ('$sno','$sname','$spwd')";
			
			$result=$student->execute($sql);
			
			if($result>0)
			{
				$this->success('注册成功,正跳转至系统登录页面...',U('Login/login'));
				//$this->redirect('Login/login');	
			}
			else
			{
				$this->error(" 创建新用户失败！");
			}
		}
			
			
}


