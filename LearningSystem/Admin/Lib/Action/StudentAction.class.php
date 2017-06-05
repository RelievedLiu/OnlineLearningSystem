<?php
class StudentAction extends Action
{
	public function student()
	{
		$student = M('student');
		$sql = "select * from tp_student";
		$arr = $student->query($sql);
		$this->assign('data',$arr);
			
		$this->display();
	}
}