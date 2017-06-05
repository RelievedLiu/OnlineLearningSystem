<?php
	class UserAction extends Action{
		/**
		*  用户模块实现的功能：
		*1 上传作业
		*2 修改个人信息
		*3 查看个人信息
		**************/
		//显示个人信息页面
		public function personinfo(){
		    $name=$_SESSION['name'];
			$student=M('student');
			$sql="select * from tp_student  where stu_name='$name' ";
			$result=$student->query($sql);
			//var_dump($result);
            $_SESSION['password']=$result[0]['stu_pwd'];
			$_SESSION['id'] = $result[0]['stu_id'];
			//var_dump($_SESSION);
			$this->display();   //显示个人信息页面 */
		}
		
		//用户信息个人信息修改                     
		public function modify()
		{
			$this->display();
        }  
		public function domodify()
		{
			$student= M('student');
			$spwd=$_POST['spwd'];	
			$sno=$_POST['sno'];
		    $telephone=$_POST['telephone'];
			$name=$_SESSION['name'];
			$sql="update tp_student set  stu_telephone='$telephone',stu_pwd='$spwd' ,stu_id = '$sno' where stu_name='$name' ";
			$result=$student->execute($sql);
			//var_dump($result);
			if($result)
			{
				$this->success('修改成功,请重新进行登录！',U('Login/login'));
			}
			else
			{
				$this->error('修改文件失败！');
			}
		}
		//查看学生个人成绩信息
		public function personscore()
		{
			$score=M('score');
			$score_name = $_SESSION['name'];
			$sql = "select * from tp_score where score_name = '$score_name' ";
			$arr=$score->query($sql);
			$this->assign('data',$arr);
			$this->show();
		}
		
		
		//进行作业上传
		public function upload(){
			$this->display();
		}
		
		//文件上传功能实现
		public function do_upload(){
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('txt', 'pdf', 'docx','doc');// 设置附件上传类型
			$upload->savePath =  './Public/upload/work/';// 设置附件上传目录
			if(!$upload->upload()) {    // 上传错误提示错误信息
			
				$this->error($upload->getErrorMsg());
			}else{       // 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			// 保存表单数据 包括附件数据
			$work = M("work");       
			$work->create();      // 创建数据对象
			$work->path = $info[0]['savename'];         // 利用 $info[0]['savename']获取文件信息       // 保存上传的照片根据需要自行组装
			$work->create_time = NOW_TIME;
			$id=$work->add();
			if($id)
			{
					$this->success('文件上传成功！');
			}
			else
			{
				$this->error('文件上传失败！');
			}
		}
		
		
		public function update(){
			$m = M('User');
			$data['id'] =$_POST['id'];
			$data['username'] =$_POST['username'];
			$data['sex']=$_POST['sex'];
			$count = $m->save($data);
			
			if($count>0)
			{
				$this->success(" modify success",'index');
			}
			else
			{
				$this->error("failure");
			}
			
		}
		
		public function search()
		{
				var_dump($_POST);
				// 获取POST数据，根据post数据组装查询的条件，根据条件从数据库中获取数据，返回给页面中遍历
				$m=M('User');
			if(isset($_POST['username']) && $_POST['username'] != null)
			{
				$where['username']=array('like',"%{$_POST['username']}%");	
			}
			 if(isset($_POST['sex']) && $_POST['sex'] != null)
			  {
				   $where['sex']=array('eq',$_POST['sex']);
			  } 
			  $arr=$m->where($where)->select();
			  $this->assign('data',$arr);
			  $this->display('index');       //找User下的index模板
				
				//$this->display();
		}
		
	}