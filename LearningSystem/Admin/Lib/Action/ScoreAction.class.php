<?php
	class  ScoreAction  extends  Action
	{
		public function score()
		{
			$score = M('score');
			$sql="select * from tp_score";
		    $arr=$score->query($sql);
			$this->assign('data',$arr);
			
			$this->display();
		}
	}