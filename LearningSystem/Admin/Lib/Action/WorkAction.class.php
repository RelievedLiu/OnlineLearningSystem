<?php
class WorkAction extends Action{
	public function work()
	{
		$work = M('work');
		$sql  = "select wid,create_time,stu_name from tp_work,tp_student where tp_student.stu_id = tp_work.sid";
		$arr = $work->query($sql);
		$this->assign('data',$arr);
		
		$this->display();
	}
	public function workreader()
	{
		$id=$_GET['id'];
		$this->assign('id',$id);
		$this->display();
	}
	public function work_delete()
	{
		$id=$_GET['id'];
		//var_dump($id);
		$work = M('work');
		if($work->where("wid=$id")->delete())
		{
			$this->success('删除成功', U('Work/work'));
         }
        else
		{
			$this->error('删除失败');
		}
	}
}