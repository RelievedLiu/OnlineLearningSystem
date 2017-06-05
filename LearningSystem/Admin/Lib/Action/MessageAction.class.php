<?php
	class MessageAction extends Action{
		//显示留言信息
		public function message()
		{
			$message = M('message');
			$sql="select * from tp_message";
		    $arr=$message->query($sql);
			$this->assign('data',$arr);
			
			$this->display();
		}
		public function messagereader()
		{
			$id=$_GET['id'];
			$this->assign('id',$id);
			$this->display();
		}
		public function message_delete()
		{
			$id=$_GET['id'];
			$message = M('message');
			 if($message->where("id=$id")->delete())
			 {
				$this->success('删除成功', U('Message/message'));
			  }
			else
			{
				$this->error('删除失败');
			}
		}
		
		
	}