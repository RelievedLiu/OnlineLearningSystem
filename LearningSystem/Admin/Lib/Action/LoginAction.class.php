<?php
	class LoginAction extends Action{
		public function login(){
			$this->display();
		}
		//进行登录
		public function do_login(){
			$name=$_POST['name'];  // 用户名
			$password=$_POST['password'];  // 密码
			$shenfen=$_POST['shenfen'];    // 用户身份
			$code=$_POST['code'];   // 用户输入的验证码
			
			if(empty($name)||empty($password)||empty($shenfen)||empty($code)){
				 echo "<script>alert('输入不能为空！');</script>";
			}
			else
			{
				if($shenfen == '教师')
				{
					   $sql="select * from tp_teacher where teacher_name='$name' and teacher_pwd ='$password' ";
					   $m = M('teacher');
					   $result=$m->query($sql);
					    if($result)
						{
							$_SESSION['name'] = $name;
							//var_dump($_SESSION);
							$this->success('用户登录成功',U('Index/index'));
						}
						else
						{
							$this->error("该用户不存在！");
						}			   
				}
				else
				{
					  $sql="select * from tp_admin where admin_name='$name' and admin_pwd = '$password'";
					  $m = M('admin');
					  $result=$m->query($sql);
						if($result)
						{
							$_SESSION['name'] = $name;
							//var_dump($_SESSION);
							$this->success('用户登录成功',U('Index/index2'));
						}
						else
						{
							$this->error("该用户不存在！");
						}			   
				}
			}

		 }
		//用户登录
		public function do_logout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()]))
			{
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->display('Login:login');	        
			}
	}