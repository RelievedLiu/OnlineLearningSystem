<?php
	class OnlinetestAction extends Action
	{
		
		public function operate()
		{
			$belong=M('belong');
			$sql="select * from tp_belong";
			$result = $belong ->query($sql);
			$this->assign('data',$result);
			
			$this->display();
		}
		
		public function  doselect()
		{
			
			$kt=M('kt');
			
			$belong=$_POST['belong'];  // 所属套题编号
			$this->assign('belong',$belong);
			//$belong=$_SESSION['belong'];  
            $sql="select * from tp_kt,tp_belong where belong_id=ktinfo_belong and ktinfo_belong = $belong";
			$result=$kt->query($sql);
			//var_dump($result);
			$this->assign('data',$result);
			$where="ktinfo_belong = $belong";
			$count=$kt->where($where)->count();  //试题数                               //将sql语句中的1改为$belong
			$temp = 100 / ((int)$count);    //每道题的分值
			$i=1;   //题号
			
			$this->assign('i',$i);
			$this->assign('temp',$temp);
			
			$answer[]=null;     // 记录正确答案的数组
			for($k=0;$k<$count;$k++)
			{
				$answer[$k]=$result[$k]['ktinfo_answer'];
			}
			$_SESSION['temp']=$temp;
			$_SESSION['count']=$count;
			$_SESSION['answer']= $answer;
			$_SESSION['belong'] = $belong;
			
			//var_dump($_SESSION['answer']);
			$this->assign('answer',$_SESSION['answer']);
			$this->display();
				
		}
		
		public function testedit()
		{
			$id=$_GET['id'];
			$_SESSION['id']= $id;
			$kt = M('kt');
			$sql = "select * from tp_kt where ktinfo_id = '$id' ";
			$result = $kt->query($sql);
			//var_dump($result);
			$this->assign('data',$result);
			$this->display();
			
		}
		
		public function dotestedit()
		{
			$id=$_SESSION['id'];
			$new_belong=$_SESSION['belong'];
			$new_cont=$_POST['txtcont'];
			$new_a=$_POST['txta'];
			$new_b=$_POST['txtb'];
			$new_c=$_POST['txtc'];
			$new_d=$_POST['txtd'];
			$new_answer=$_POST['txtanswer'];
			
			$kt= M('kt');
			$sql="update tp_kt set ktinfo_belong=$new_belong,ktinfo_cont='$new_cont',ktinfo_a='$new_a',ktinfo_b='$new_b',ktinfo_c='$new_c',ktinfo_d='$new_d',ktinfo_answer='$new_answer' where ktinfo_id='$id'";
			$count = $kt->execute($sql);
			if($count)
			{
				$this->success('更新成功！');
			}
			else
			{
				$this->error('更新失败！');
			}			
		}
		
		public function testadd()
		{
			$this->display();
		}
		
		public function dotestadd()
		{
			$kt_id = $_POST['txtid'];
			$belong=$_POST['belong'];  // 所属套题id
			$kt_cont=$_POST['txtcont'];   // 考题内容
			$kt_a=$_POST['txta'];   // A选项内容
			$kt_b=$_POST['txtb'];   // B选项内容
			$kt_c=$_POST['txtc'];   // C选项内容
			$kt_d=$_POST['txtd'];   // D选项内容
			$kt_answer=$_POST['txtanswer'];   // 正确选项
			// 判断考题信息输入是否为空
			if(empty($kt_cont)||empty($kt_a)||empty($kt_b)||empty($kt_c)||empty($kt_d)||empty($kt_answer)){
				echo "<script>alert('考题信息输入不能为空！');</script>";
				exit();
			}
			// 添加考题信息
			$kt= M('kt');
			$sql="insert into tp_kt values('$kt_id','$kt_cont','$kt_a','$kt_b','$kt_c','$kt_d','$kt_answer','$belong')";
			
			$count = $kt->execute($sql);
			if($count)
			{
				$this->success('考题添加成功！');
			}
			else
			{
				$this->error('考题添加失败！');
			}						
		}
		
		public function testdelete()
		{
			$id=$_GET['id'];
			//var_dump($id);
			$kt = M('kt');
			$sql = "delete from tp_kt where ktinfo_id = $id ";
			$result = $kt->execute($sql);
			//var_dump($result);
		    if($result)
			 {
				$this->success('删除成功!');
			  }
			else
			{
				$this->error('删除失败!');
			}  
		}
		
	}