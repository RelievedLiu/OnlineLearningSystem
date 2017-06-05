<?php
return array(	
	'SHOW_PAGE_TRACE'=>false,
	
	 'DB_PREFIX'=>'tp_' ,           //数据库表前缀	 

	 'DB_DSN'=>'mysql://root:123456@localhost:3306/learningsystem',      //使用DSN的方式配置数据库信息
	 
	'TMPL_PARSE_STRING'  =>array(
     '__PUBLIC__' => '/test/Public',         // 更改默认的__PUBLIC__ 替换规则
     '__JS__' => '/test/Public/JS/',          // 增加新的JS类库路径替换规则
     '__UPLOAD__' => '/Uploads',        // 增加新的上传路径替换规则
	 '__CSS__'=>'/test/Public/Css',
	 '__IMAGES__'=>'/test/Public/Images',)
	
);
?>