<?php
class PublicAction extends Action{
	public function ebook()
	{
		$book=M(ebook);
		$sql ="select * from tp_ebook";
	    $arr = $book->query($sql);
		$this->assign('data',$arr);
	
		$this->display();
	}
	
	public function ebook_delete()
	{
		$id=$_GET['id'];
		$book=M(ebook);
		 if($book->where("id=$id")->delete())
		 {
			$this->success('删除成功', U('Public/ebook'));
          }
        else
		{
			$this->error('删除失败');
		}
    }
	
	public function ebook_add()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('txt', 'pdf', 'docx',);// 设置附件上传类型
		$upload->savePath =  './Public/upload/ebook/';// 设置附件上传目录
		if(!$upload->upload()) {    // 上传错误提示错误信息	
			$this->error($upload->getErrorMsg());
		}else{       // 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}	
			
		$book=M('ebook');
		$book->create();
		$path = $info[0]['savename'];
		$bookname = $_POST['bookname'];
		$authorname = $_POST['authorname'];
		$publication = $_POST['publication'];
		$sql ="insert into tp_ebook(bookname,author,publication,path) values('$bookname','$author','$publication','$path')";	
	    $arr = $book->execute($sql);
	    if($arr)
	    {
			$this->success('添加成功', U('Public/ebook'));
         }
        else
		{
			$this->error('添加失败');
		} 	
	}
	
	public function ebookreader()
		{
			$id=$_GET['id'];
			$this->assign('id',$id);
			$this->display();
		}

	public function ppt()
	{
		$ppt=M(ppt);
		$sql ="select * from tp_ppt";
	    $arr = $ppt->query($sql);
		$this->assign('data',$arr);
	
		$this->display();
	}
	
	public function ppt_delete()
	{
		$id=$_GET['id'];
		$ppt=M(ppt);
		 if($ppt->where("id=$id")->delete())
		 {
			$this->success('删除成功', U('Public/ppt'));
          }
        else
		{
			$this->error('删除失败');
		}
    }
	
	public function ppt_add()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('txt', 'pdf', 'docx',);// 设置附件上传类型
		$upload->savePath =  './Public/upload/ppt/';// 设置附件上传目录
		if(!$upload->upload()) {    // 上传错误提示错误信息	
			$this->error($upload->getErrorMsg());
		}else{       // 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}
		
		
		$ppt=M('ppt');
		$ppt->create();
		$title = $_POST['title'];
		$path = $info[0]['savename'];
		$sql = "insert into tp_ppt(title,path) values ('$title','$path')";
		
		$arr = $ppt->execute($sql);
	    if($arr)
	    {
			$this->success('添加成功', U('Public/ppt'));
         }
        else
		{
			$this->error('添加失败');
		} 		
	}
	public function pptreader()
		{
			$id=$_GET['id'];
			$this->assign('id',$id);
			$this->display();
		}
	
	public function lab()
	{
		$lab=M('lab');
		$sql ="select * from tp_lab";
	    $arr = $lab->query($sql);
		$this->assign('data',$arr);

		$this->display();
	}
	public function lab_delete()
	{
		$id=$_GET['id'];
		$ppt=M('lab');
		 if($ppt->where("id=$id")->delete())
		 {
			$this->success('删除成功', U('Public/lab'));
          }
        else
		{
			$this->error('删除失败');
		}
	}
	
	public function lab_add()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array('txt', 'pdf', 'docx',);// 设置附件上传类型
		$upload->savePath =  './Public/upload/lab/';// 设置附件上传目录
		if(!$upload->upload()) {    // 上传错误提示错误信息	
			$this->error($upload->getErrorMsg());
		}else{       // 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}	
		
		$lab = M('lab');
		$lab->create();
		$labname = $_POST['labname'];
		$path = $info[0]['savename'];
		$sql = "insert into tp_lab(shiyan_name,path) values ('$labname','$path')";
		$arr = $lab->execute($sql);
		
		if($arr)
	    {
			$this->success('添加成功', U('Public/lab'));
         }
        else
		{
			$this->error('添加失败');
		} 	
	}

	public function labreader()
		{
			$id=$_GET['id'];
			$this->assign('id',$id);
			$this->display();
		}
	
	public function video()
	{
		$video=M(video);
		$sql ="select * from tp_video";
	    $arr = $video->query($sql);
		$this->assign('data',$arr);
	
		$this->display();
	}
	//课件删除功能
	public function video_delete()
	{
		$id=$_GET['id'];
		$video=M(video);
		 if($video->where("id=$id")->delete())
		 {
			$this->success('删除成功', U('Public/video'));
          }
        else
		{
			$this->error('删除失败');
		}
    }
	//课件添加
	public function video_add()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 314572800000 ;// 设置附件上传大小
		$upload->allowExts  = array('mp4','wmv');// 设置附件上传类型
		$upload->savePath =  './Public/upload/video/';// 设置附件上传目录
		if(!$upload->upload()) {    // 上传错误提示错误信息	
			$this->error($upload->getErrorMsg());
		}else{       // 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		}	
		
		
		$video=M(video);
		$video->create();
		$path = $info[0]['savename'];
		$name = $_POST['name'];
		$sql ="update tp_video set path='$path' where name = '$name'";
		
	    $arr = $video->execute($sql);
	    if($arr)
	    {
			$this->success('添加成功', U('Public/video'));
         }
        else
		{
			$this->error('添加失败');
		}
		
	}
		
}