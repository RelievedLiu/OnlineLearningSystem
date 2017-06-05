<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title>视频播放</title><meta http-equiv="content-type" content="text/html; charset=utf-8"></meta><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 引入 Bootstrap --><link href="/LearningSystem/Public/css/bootstrap.min.css" rel="stylesheet"><link href="/LearningSystem/Public/css/video-js.css" rel="stylesheet"><script src="/LearningSystem/Public/js/videojs-ie8.min.js"></script><script>		videojs.options.flash.swf = "include/video-js/video-js.swf"
	</script><!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]--><!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) --><script src="/LearningSystem/Public/js/jquery-1.11.1.js"></script><!-- 包括所有已编译的插件 --><script src="/LearningSystem/Public/js/bootstrap.min.js"></script><style type="text/css">      	#wrapper{    
      		margin-top:100px;
      		margin-bottom: 10px;
      	}
		.demo{
		margin:50px auto;
		text-align:center;
		}
		#dividepage{
			text-align:center;
		}
		.my-footer {
      border-top: 1px solid #eeeeee;
      padding: 10px 0;
      margin-top: 10px;
      text-align: center;
    }
	.xc{
				width: 200px;
				margin-top:10px;
			}

      </style></head><body><div class="container"><div class="row"><div class="col-lg-12"><div class="panel panel-default"><div class="panel-heading">						视频播放  /  第<?php echo ($id); ?>讲
					</div><div class="panel-body"><center><video id="my-video" class="video-js" controls preload="auto" width="1000" height="500" data-setup="{}"><source src="/LearningSystem/Public/upload/video/<?php echo $path;?>"  type="video/mp4"></video></center></div></div></div></div><!--left navbar--><!----><!--footer--><footer class="my-footer"><p class="text-success">河南中医药大学<br><small> Copyright Institute of Information Technology.</small></p></footer><!--footer end--></div></div
			  <script src="/LearningSystem/Public/js/video.min.js"></script><script type="text/javascript">			var myPlayer = videojs('my-video');
			videojs("my-video").ready(function(){
				var myPlayer = this;
				myPlayer.play();
			});
		</script></body></html>