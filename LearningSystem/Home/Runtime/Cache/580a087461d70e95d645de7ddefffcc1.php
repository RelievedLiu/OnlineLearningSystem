<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>学生在线测试</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><style type="text/css">      	#myCarousel{
      		margin-top:-20px;
      	}
      	#showcontent{
      		margin-top:20px;
      	}
      	p{
      		line-height:1.5;
      	}
      	.my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
	td{
		font-size:15px;	
	}
      </style></head><body><div class="container"><!--banner--><div id="banner" class="row"><div class="col-lg-8"><img src="__PUBLIC__/images/logo.jpg"></div><div class="col-lg-4"><ul class="nav navbar-nav navbar-right"><li><a href="__APP__/User/personinfo"><span class="glyphicon glyphicon-user"></span>你好，<?php echo (session('name')); ?>！</a></li><li><a href="/LearningSystem/index.php/Login/do_logout"><span class="glyphicon glyphicon-log-out"></span>退出</a></li></ul></div></div><!--banner end--><!--navbar--><div class="row"><div class="col-lg-12"><div class="navbar navbar-default collapse navbar-collapse"><ul class="nav nav-tabs navbar-nav"><li><a href="__APP__/Index/index">网站首页</a></li><li><a href="__APP__/Public/video">在线视频</a></li><li><a href="__APP__/Public/ppt">教学课件</a></li><li><a href="__APP__/Public/ebook">电子书籍</a></li><li><a href="__APP__/User/upload">作业上传</a></li><li><a href="__APP__/Onlinetest/onlinetest">在线测试</a></li><li><a href="__APP__/Message/message">留言板</a></li><li><a href="__APP__/Public/learningarea">学习园地</a></li><li><a href="__APP__/Public/about">关于我们</a></li></ul><form class="navbar-form navbar-right" role="search"  action="/test/index.php/Public/dosearch" method="post" ><div class="form-group"><input type="text" class="form-control" placeholder="Search" name="username"></div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search
			 </button></form></div></div></div><!--navbar end--><div class="row"><div class="col-lg-12"><div class="panel panel-default"><div class="panel-body"><form action="/LearningSystem/index.php/Onlinetest/getscore" method="post"><span id='tit'><center>考试科目：JAVA &nbsp;&nbsp; <?php echo ($result[0]['belong_name']); ?>&nbsp;&nbsp;满分：100分</center></span><br/><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($i); ?>、<?php echo ($vo['ktinfo_cont']); ?>   (<?php echo ($temp); ?>分)<br/><input type='radio' name="select<?php echo ($i); ?>" value='A'><?php echo ($vo['ktinfo_a']); ?><br/><input type='radio' name="select<?php echo ($i); ?>" value='B'><?php echo ($vo['ktinfo_b']); ?><br/><input type='radio' name="select<?php echo ($i); ?>" value='C'><?php echo ($vo['ktinfo_c']); ?><br/><input type='radio' name="select<?php echo ($i); ?>" value='D'><?php echo ($vo['ktinfo_d']); ?><br/><br/><?php endforeach; endif; else: echo "" ;endif; ?><center><input type='submit' name='jiaojuan' value='交卷'></center></form></div></div></div></div><!--footer--><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information Technology.</small></p></footer><!--footer end--></div></div></body></html>