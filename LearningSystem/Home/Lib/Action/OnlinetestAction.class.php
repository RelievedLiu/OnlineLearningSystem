<?php
	class OnlinetestAction extends Action{
		/***********实现在线测试功能********
		*1、实现在线测试
		*2、实现成绩查询
		*************************/
		public function onlinetest(){
			$belong=M('belong');
			$sql="select * from tp_belong";
			$result = $belong ->query($sql);
			$this->assign('data',$result);
			
			$score=M('score');
			$sql2="select * from tp_score";
			$arr=$score->query($sql2);
			$this->assign('arr',$arr);
			
			$this->display();
		}
		public function dotest(){
			if(isset($_POST['sub'])){
				$belong=$_POST['belong'];
				$_SESSION['belong']=$belong;
				echo "<script>alert('考试开始，请认真答题！');location.href='/LearningSystem/index.php/Onlinetest/showtest';</script>";
			}	
		}
		public function showtest(){
			//var_dump($_SESSION);
			$kt=M('kt');
			
			$belong=$_SESSION['belong'];  // 所属套题编号
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
		   // var_dump($_SESSION);
				
			$this->display();
	 }
	 
	//计算考生得到的分数，并将考生的得分存入数据库中
	 public function getscore(){
		   if(isset($_POST['jiaojuan'])){
			$right_nums=0;  // 答对的试题数
			$right=$_SESSION['answer'];  // 正确答案
			$nums=$_SESSION['count'];  // 试题数
			$every_score=$_SESSION['temp']; // 分值
			for($i=1;$i<=$nums;$i++){
				$a=$_POST['select'.$i];      // 答案
				//print_r($a);
				if($a==$right[($i-1)]){
					$right_nums=$right_nums+1;  
				}
			}
			$total_score=$right_nums*$every_score;  // 得分
			// 输出得分
			echo "<script>alert('考试完成！得分：$total_score');location.href='/LearningSystem/index.php/Onlinetest/showtest';</script>";
			
			// 将考生成绩写入数据库
			$score=M('score');
			$score_name=$_SESSION['name'];  // 姓名
			$belong=$_SESSION['belong'];
			date_default_timezone_set('Asia/Shanghai'); 
			$now=date('Y-m-d h:i:s',time());  // 当前时间
			$sql="insert into tp_score(score_name,score_belong,score_score,score_time) values('$score_name',$belong,$total_score,'$now')";
			$score->execute($sql);
		}
	 }	
	}