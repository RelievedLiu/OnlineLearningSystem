<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>JAVA在线学习系统</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet"><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="__PUBLIC__/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="__PUBLIC__/js/bootstrap.min.js"></script><script>			(function(T, h, i, n, k, P, a, g, e) {
				g = function() {
					P = h.createElement(i);
					a = h.getElementsByTagName(i)[0];
					P.src = k;
					P.charset = "utf-8";
					P.async = 1;
					a.parentNode.insertBefore(P, a)
				};
				T["ThinkPageWeatherWidgetObject"] = n;
				T[n] || (T[n] = function() {
					(T[n].q = T[n].q || []).push(arguments)
				});
				T[n].l = +new Date();
				if(T.attachEvent) {
					T.attachEvent("onload", g)
				} else {
					T.addEventListener("load", g, false)
				}
			}(window, document, "script", "tpwidget", "//widget.thinkpage.cn/widget/chameleon.js"))
		</script><script>			tpwidget("init", {
				"flavor": "slim",
				"location": "WX4FBXXFKE4F",
				"geolocation": "disabled",
				"language": "zh-chs",
				"unit": "c",
				"theme": "chameleon",
				"container": "tp-weather-widget",
				"bubble": "enabled",
				"alarmType": "badge",
				"color": "#F47837",
				"uid": "U605DCADA4",
				"hash": "78f46a1198d54dafa0cda717efa717a9"
			});
			tpwidget("show");
		</script><script>			function  jump()
			{
				window.location="/test/index.php/Public/search";
			}
		</script><style type="text/css">      	#myCarousel{
      		margin-top:-20px;
      	}
      	#showcontent{
      		margin-top:20px;
      	}
      	p{
      		line-height:1.7;
      	}
      	.my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
	td{
		font-size:12px;	
	}
	.xc{
				width: 200px;
				margin-top:10px;
			}
      </style></head><body><div class="container"><!--banner--><div id="banner" class="row"><div class="col-lg-6"><img src="__PUBLIC__/images/logo.jpg"></div><div class="col-lg-2"><div id="tp-weather-widget" class="xc"></div></div><div class="col-lg-4"><ul class="nav navbar-nav navbar-right"><li><a href="__APP__/User/personinfo"><span class="glyphicon glyphicon-user"></span>你好，<?php echo (session('name')); ?>！</a></li><li><a href="/LearningSystem/index.php/Login/do_logout"><span class="glyphicon glyphicon-log-out"></span>退出</a></li></ul></div></div><!--banner end--><!--navbar--><div class="row"><div class="col-lg-12"><div class="navbar navbar-default collapse navbar-collapse"><ul class="nav nav-tabs navbar-nav"><li><a href="__APP__/Index/index">网站首页</a></li><li><a href="__APP__/Public/video">在线视频</a></li><li><a href="__APP__/Public/ppt">教学课件</a></li><li><a href="__APP__/Public/ebook">电子书籍</a></li><li><a href="__APP__/User/upload">作业上传</a></li><li><a href="__APP__/Onlinetest/onlinetest">在线测试</a></li><li><a href="__APP__/Message/message">留言板</a></li><li><a href="__APP__/Public/learningarea">学习园地</a></li><li><a href="__APP__/Public/about">关于我们</a></li></ul><form class="navbar-form navbar-right" role="search"  action="/LearningSystem/index.php/Public/search" method="post" ><div class="form-group"><input type="text" class="form-control" placeholder="Search" name="searchcontent"></div><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search
			 </button></form></div></div></div><!--navbar end--><div class="row"><div class="col-lg-12"><div id="myCarousel" class="carousel slide"><!-- 轮播（Carousel）指标 --><ol class="carousel-indicators"><li data-target="#myCarousel" data-slide-to="0" class="active"></li><li data-target="#myCarousel" data-slide-to="1"></li><li data-target="#myCarousel" data-slide-to="2"></li></ol><!-- 轮播（Carousel）项目 --><div class="carousel-inner"><div class="item active"><img src="__PUBLIC__/images/001index.jpg" alt="First slide"><div class="carousel-caption"></div></div><div class="item"><img src="__PUBLIC__/images/002index.jpg" alt="Second slide"><div class="carousel-caption"></div></div><div class="item"><img src="__PUBLIC__/images/003index.jpg" alt="Third slide"><div class="carousel-caption"></div></div></div><!-- 轮播（Carousel）导航 --><a class="carousel-control left" href="#myCarousel" 
     				data-slide="prev">&lsaquo;
     			</a><a class="carousel-control right" href="#myCarousel" 
     			data-slide="next">&rsaquo;
     		</a></div><!--公告--><div id="showcontent" class="row"><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						网站公告<span class="label label-info pull-right"><a href="#">more</a></span></div><div class="panel-body"><table class="table table-hover"><tbody><?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><a href="#" class="text-success"><?php echo ($vo["title"]); ?></a></td><td><?php echo ($vo["createtime"]); ?></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div></div><div class="col-lg-6 "><h4 class="text-primary">Java简介</h4><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java是一门面向对象编程语言，不仅吸收了C++语言的各种优点，还摒弃了C++里难以理解的多继承、指针等概念，因此Java语言具有功能强大和简单易用两个特征。Java语言作为静态面向对象编程语言的代表，极好地实现了面向对象理论，允许程序员以优雅的思维方式进行复杂的编程.</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Java具有简单性、面向对象、分布式、健壮性、安全性、平台独立与可移植性、多线程、动态性等特点 。Java可以编写桌面应用程序、Web应用程序、分布式系统和嵌入式系统应用程序等.</p></div></div><!--公告部分--><!--课件和学习园地--><div class="row"><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						实验指导书<span class="label label-info pull-right"><a href="#">more</a></span></div><div class="panel-body"><table class="table table-hover"><tbody><?php if(is_array($lab)): $i = 0; $__LIST__ = $lab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td>实验 <?php echo ($vo["id"]); ?></td><td><a href="#" class="text-success"><?php echo ($vo["shiyan_name"]); ?></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div></div><div class="col-lg-6"><div class="panel panel-default"><div class="panel-heading">						学习园地<span class="label label-info pull-right"><a href="#">more</a></span></div><div class="panel-body"><table class="table table-hover"><tbody><?php if(is_array($learning)): $i = 0; $__LIST__ = $learning;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><a href="#" class="text-success"><?php echo ($vo["title"]); ?></a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table></div></div></div></div><!--thumb group--><div id="bookdescrp"class="row"><div class="col-lg-12"><div class="panel"><div class="panel-heading"><h4 class="text-primary">经典图书介绍</h4></div><div class="panel-body"><div class="col-lg-4"><div class="thumbnail"><img src="__PUBLIC__/images/java0302.jpg"><div class="caption"><h3 class="text-center">《Java开发实战经典》</h3><p>&nbsp;&nbsp;&nbsp;&nbsp;该书是一本综合讲解Java核心技术的书籍，在书中使用大量的代码及案例进行知识点的分析与运用，并且给出一些比较成熟的开发步骤，帮助读者更好地进行Java的开发。</p><a href="__APP__/Public/book1detail" class="btn btn-default">详细</a></div></div></div><div class="col-lg-4"><div class="thumbnail"><img src="__PUBLIC__/images/java04.jpg"><div class="caption"><h3 class="text-center">《java编程思想》</h3><p>&nbsp;&nbsp;&nbsp;&nbsp;本书深入浅出、循序渐进地把我们领入Java的世界，让我们在不知不觉中就学会了用Java的思想去考虑问题、解决问题。本书不仅适合Java的初学者，更适合于有经验的Java程序员。</p><a href="#" class="btn btn-default">详细</a></div></div></div><div class="col-lg-4"><div class="thumbnail"><img src="__PUBLIC__/images/java05.jpg"><div class="caption"><h3 class="text-center">《深入理解Java虚拟机》</h3><p>&nbsp;&nbsp;&nbsp;&nbsp;本书围绕内存管理、执行子系统、编程编译与优化、高效并发等核心内容对JVM进行全面而深入的分析，深刻揭示JVM的工作原理；注重实现，包含大量经典案例和最佳实践。</p><a href="#" class="btn btn-default">详细</a></div></div></div></div></div></div></div><!--thumb group end--><!--一些优秀课程网站连接--><div id="websitelink" class="row"><div class="col-lg-12"><div class="panel"><div class="panel-heading"><h4 class="text-primary">相关网站连接</h4></div><div class="panel-body"><div class="col-lg-3"><div class="thumbnail"><a href="http://mooc.study.163.com/course/ZJU-1000002014#/info"><img src="__PUBLIC__/images/thumb_01.png" ></a><div class="caption"><p class="text-center">JAVA程序设计语言(基础)</p></div></div></div><div class="col-lg-3"><div class="thumbnail"><a href="http://mooc.study.163.com/course/ZJU-1000004001#/info"><img src="__PUBLIC__/images/thumb_02.png" ></a><div class="caption"><p class="text-center">JAVA程序设计语言(进阶)</p></div></div></div><div class="col-lg-3"><div class="thumbnail"><a href="http://www.imooc.com/course/programdetail/pid/31"><img src="__PUBLIC__/images/thumb_03.jpg" ></a><div class="caption"><p class="text-center">JAVA工程师路径</p></div></div></div><div class="col-lg-3"><div class="thumbnail"><a href="http://www.icourse163.org/course/PKU-1001941004#/info"><img src="__PUBLIC__/images/thumb_04.png" ></a><div class="caption"><p class="text-center">面向对象程序设计(JAVA)</p></div></div></div></div></div></div></div><!--网站连接结束--><!--footer--><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information Technology.</small></p></footer><!--footer end--></div></div></body></html>