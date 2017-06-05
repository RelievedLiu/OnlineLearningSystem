<?php
     class DownloadAction extends Action{
		 /***********实现文件的下载功能***************************/
		 public function download(){
			import('@.Custom.traverseDir');
			$limit = new traverseDir();
			$cur_file = './public/file/ebook/1';    //需要下载的文件所在的文件目录（进行更改而下载不同的内容）
			$handler = opendir($cur_file); //$cur_file 文件所在目录
			$download_file = array();
			$i = 0;
			while( ($filename = readdir($handler)) !== false ) {
				echo $filename;
			 if($filename != '.' && $filename != '..') {
				$download_file[$i++] = $filename;
				echo $filename;
			 }
			}
			closedir($handler);
			$scandir=new traverseDir($cur_file,$save_path); //$save_path zip包文件目录
			$scandir->tozip($download_file);
		 }	
	}