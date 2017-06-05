<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>Search</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><style type="text/css">      	#myCarousel{
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
	#search{
		text-align:center;
	}
	#result{
				margin-top:20px;
	}
      </style></head><body><div class="container"><!--banner--><div id="banner" class="row"><div class="col-lg-8"><img src="__PUBLIC__/images/logo.jpg"></div><div class="col-lg-4"><ul class="nav navbar-nav navbar-right"><li><a href="__APP__/User/personinfo"><span class="glyphicon glyphicon-user"></span>你好，<?php echo (session('name')); ?>！</a></li><li><a href="/LearningSystem/index.php/Login/do_logout"><span class="glyphicon glyphicon-log-out"></span>退出</a></li></ul></div></div><!--banner end--><!--navbar--><div class="row"><div class="col-lg-12"><div class="navbar navbar-default collapse navbar-collapse"><ul class="nav nav-tabs navbar-nav"><li><a href="__APP__/Index/index">网站首页</a></li><li><a href="__APP__/Public/video">在线视频</a></li><li><a href="__APP__/Public/ppt">教学课件</a></li><li><a href="__APP__/Public/ebook">电子书籍</a></li><li><a href="__APP__/User/upload">作业上传</a></li><li><a href="__APP__/Onlinetest/onlinetest">在线测试</a></li><li><a href="__APP__/Message/message">留言板</a></li><li><a href="__APP__/Public/learningarea">学习园地</a></li><li><a href="__APP__/Public/about">关于我们</a></li></ul></div></div></div><div class="row"><div class="col-lg-12"><div class="panel panel-default"><div class="panel-body"><div id="result"><table class="table table-hover"><tbody><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><a href="__URL__/searchreader/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></td><td><?php echo ($vo["belong"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div></div></div></div><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information formation Technology.</small></p></footer></div></div></body></html>