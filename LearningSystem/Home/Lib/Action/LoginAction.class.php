<?php
	class LoginAction extends Action{
		/*登录模块实现功能
		1、登录功能
		2、退出功能
		***********************/
		public function login(){
			$this->display();
		}
			
	    public function do_login(){	
		//获取用户名和密码，和数据库比对，有该用户则允许登录，否则输出错误页面
		    $name=$_POST['name'];
			$password=$_POST['password'];
			$code=$_POST['code'];
					
			//先判断验证码的正确性
			if($_SESSION['verify']!==md5($code))
			{
				$this->error("验证码输入错误!");
			}
			
			$student=M('student');
			
			$arr=$student->query("select * from tp_student where stu_name='$name' and stu_pwd = '$password' ");
			//var_dump($arr[0]['stu_id']);
			
			if($arr)
			{
				$_SESSION['name'] = $name;
				$_SESSION['id'] =$arr[0]['stu_id']; 
				
				$this->success('登录成功,正跳转至系统首页...',U('Index/index'));
			}
			else
			{
				$this->error("登录失败,用户名或密码不正确!");
			}
	  }
		
		//首页中用户退出功能：清除缓存
		public function do_logout(){
		    $_SESSION=array();
			if(isset($_COOKIE[session_name()]))
			{
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->redirect('Login/login');
		}
	}