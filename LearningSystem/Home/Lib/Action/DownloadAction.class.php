<?php
     class DownloadAction extends Action{
		 /***********ʵ���ļ������ع���***************************/
		 public function download(){
			import('@.Custom.traverseDir');
			$limit = new traverseDir();
			$cur_file = './public/file/ebook/1';    //��Ҫ���ص��ļ����ڵ��ļ�Ŀ¼�����и��Ķ����ز�ͬ�����ݣ�
			$handler = opendir($cur_file); //$cur_file �ļ�����Ŀ¼
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
			$scandir=new traverseDir($cur_file,$save_path); //$save_path zip���ļ�Ŀ¼
			$scandir->tozip($download_file);
		 }	
	}