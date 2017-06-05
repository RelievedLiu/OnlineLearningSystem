<?php
	class UserAction extends Action
	{
		public function info()
		{
			//var_dump($_SESSION);
			$name=$_SESSION['name'];
			
			if($name == 'admin')
			{
				$m=M('admin');
				$sql = "select * from tp_admin";
				$result=$m->query($sql);
				
				$name = $result[0]['admin_name'];
				$sex = $result[0]['admin_sex'];
				$pwd = $result[0]['admin_pwd'];
				
				$this->assign('name',$name);
				$this->assign('pwd',$pwd);
				$this->assign('sex',$sex);
			}	
			else
			{
				$m=M('teacher');
				$sql = "select * from tp_teacher where teacher_name ='$name'";
				$result=$m->query($sql);
			   // var_dump($result);
				$name = $result[0]['teacher_name'];
				$pwd = $result[0]['teacher_pwd'];
				$sex = $result[0]['teacher_sex'];
				
				$this->assign('name',$name);
				$this->assign('pwd',$pwd);
				$this->assign('sex',$sex);
			}
			
			$this->display();
		}
		
		
		
		public function modify()
		{
			$this->display();
		}
		
		
		public function do_modify()
		{
			$temp = $_SESSION['name'];
			
			$name=$_POST['name'];
			$password = $_POST['password'];
			$repassword = $_POST['repassword'];
			$sex = $_POST['sex'];
			
			if($password == $repassword)
			{
				$teacher=M('teacher');
				$arr = array(
								'teacher_name'=>$name,
								'teacher_sex'=>$sex,
								'teacher_pwd'=>$password,
				 );
				 
				$count= $teacher->where("teacher_name ='$temp'")->save($arr);
					
				if($count>0)
				{
					//$this->redirect('Login/login');
					$this->success('修改成功');
				}
				else
				{
					$this->error('修改失败');
				} 
				
			}
			
				
		}
		
		
		
	}