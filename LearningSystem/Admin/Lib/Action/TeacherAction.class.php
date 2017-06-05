<?php
class TeacherAction extends Action
{
	public function teacher()
	{
		$teacher = M('teacher');
		$sql = "select * from tp_teacher";
		$arr = $teacher->query($sql);
		$this->assign('data',$arr);
			
		$this->display();
	}
}