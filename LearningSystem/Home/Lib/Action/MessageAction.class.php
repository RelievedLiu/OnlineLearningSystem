<?php
class MessageAction extends Action{
		/*********留言功能***********/
		public function message()
		{
			$this->display();
		}
		public function do_message(){
			//文件上传
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('txt', 'pdf', 'docx','doc');// 设置附件上传类型
			$upload->savePath =  './Public/upload/message/';// 设置附件上传目录
			if(!$upload->upload()) {    // 上传错误提示错误信息
			
				$this->error($upload->getErrorMsg());
			}else{       // 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			// 保存表单数据 包括附件数据 
			$message = M('message');
			$message->create();
			$path = $info[0]['savename'];   //文件名，可以用来保存文件路径
			
			$title=$_POST['title'];
			$content=$_POST['content'];
			//$filename = $info[0]['savename'];         // 利用 $info[0]['savename']获取文件信息       // 保存上传的照片根据需要自行组装
			$create_time = NOW_TIME;             //创建的时间
			$uid=$_SESSION['id'];
			$sql="insert into tp_message(title,content,path,create_time,uid) values('$title','$content','$path','$create_time','$uid')";
			
			$result=$message->execute($sql);
			if($result)
			{
					$this->success('留言成功！');
			}
			else
			{
				$this->error('留言失败！');
			}
		}
}