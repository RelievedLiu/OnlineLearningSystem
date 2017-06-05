# Host: localhost  (Version: 5.5.53)
# Date: 2017-05-26 09:27:19
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "copy_of_tp_video"
#

DROP TABLE IF EXISTS `copy_of_tp_video`;
CREATE TABLE `copy_of_tp_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "copy_of_tp_video"
#

/*!40000 ALTER TABLE `copy_of_tp_video` DISABLE KEYS */;
INSERT INTO `copy_of_tp_video` VALUES (1,'第01章_JAVA简介'),(2,'第02章_递归补充'),(3,'第02章_基础语法'),(4,'第03章_面向对象'),(5,'第04章_异常处理'),(6,'第05章_数组'),(7,'第06章_常用类'),(8,'第07章_容器'),(9,'第08章_IO'),(10,'第09章_线程'),(11,'第10章_网络'),(12,'第11章_GUI');
/*!40000 ALTER TABLE `copy_of_tp_video` ENABLE KEYS */;

#
# Structure for table "tp_admin"
#

DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `admin_id` char(20) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_sex` char(4) NOT NULL,
  `admin_pwd` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_admin"
#

/*!40000 ALTER TABLE `tp_admin` DISABLE KEYS */;
INSERT INTO `tp_admin` VALUES ('171001','admin','男','123456');
/*!40000 ALTER TABLE `tp_admin` ENABLE KEYS */;

#
# Structure for table "tp_belong"
#

DROP TABLE IF EXISTS `tp_belong`;
CREATE TABLE `tp_belong` (
  `belong_id` int(11) NOT NULL AUTO_INCREMENT,
  `belong_name` varchar(50) NOT NULL,
  PRIMARY KEY (`belong_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_belong"
#

/*!40000 ALTER TABLE `tp_belong` DISABLE KEYS */;
INSERT INTO `tp_belong` VALUES (1,'第一套题'),(2,'第二套题'),(3,'第三套题'),(4,'第四套题'),(5,'第五套题'),(6,'第六套题');
/*!40000 ALTER TABLE `tp_belong` ENABLE KEYS */;

#
# Structure for table "tp_ebook"
#

DROP TABLE IF EXISTS `tp_ebook`;
CREATE TABLE `tp_ebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `publication` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_ebook"
#

/*!40000 ALTER TABLE `tp_ebook` DISABLE KEYS */;
INSERT INTO `tp_ebook` VALUES (1,'《java开发实战经典》','李兴华','清华大学出版社',NULL),(2,'《深入理解Java虚拟机：JVM高级特性与最佳实践》','周志明','机械工业出版社',NULL),(3,'《Java并发编程实战》','Brian Goetz','机械工业出版社',NULL),(4,'《Java多线程编程核心技术》','高洪岩','人民邮电出版社',NULL),(5,'《Effective Java中文版》','Joshua Bloch','机械工业出版社',NULL),(6,'《深入分析Java Web技术内幕》','许令波','电子工业出版社',NULL),(7,'《Head First Java》','Kathy Sierra Bert Bates','中国电力出版社',NULL),(8,'《Thinking in Java》',' Bruce Eckel ',' Prentice Hall',NULL),(9,'《 Java 核心技术 》','Cay S. Horstmann、Gary Cornell  ','人民邮电出版社',NULL);
/*!40000 ALTER TABLE `tp_ebook` ENABLE KEYS */;

#
# Structure for table "tp_kt"
#

DROP TABLE IF EXISTS `tp_kt`;
CREATE TABLE `tp_kt` (
  `ktinfo_id` int(11) NOT NULL,
  `ktinfo_cont` text NOT NULL,
  `ktinfo_a` varchar(200) NOT NULL,
  `ktinfo_b` varchar(200) NOT NULL,
  `ktinfo_c` varchar(200) NOT NULL,
  `ktinfo_d` varchar(200) NOT NULL,
  `ktinfo_answer` char(10) NOT NULL,
  `ktinfo_belong` int(11) NOT NULL,
  `kt_leibie` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_kt"
#

/*!40000 ALTER TABLE `tp_kt` DISABLE KEYS */;
INSERT INTO `tp_kt` VALUES (1,'下面关于变量及其作用范围的陈述哪个是不对的?','A.实例变量是类的成员变量','B.实例变量用关键字static明','C.在方法中定义的局部变量在该方法被执行时创建','D.局部变量在使用前必须被初始化','C',1,'选择'),(2,'下列叙述中，正确的是','A.Java语言的标识符是区分大小写的?','B.源文件名与public类名可以不相同','C.源文件扩展名为.jar?','D.源文件中public类的数目不限定义','A',1,'判断'),(3,'定义命名常量LENGTH，值为100的合理语句为','A. public int LENGTH=100?','B. final int LENGTH=100?','C. public static int LENGTH=100?','D. static? final int LENGTH=100','D',1,'选择'),(4,'无需在程序中import就可以直接使用简单类名的类，属于包','A.java.applet?','B.java.awt?','C.java.util?','D.java.lang','D',1,'选择'),(5,'哪个Man描述了“Man has a best friend who is a Dog”这个关系?','A. class Man extends Dog { }','B. class Man implements Dog { }','C. class Man { private BestFriend dog; }','D. class Man { private Dog bestFriend; }','D',1,'选择'),(6,'下列哪个不是java中的关键字','A.class','B.int','C.double','D.__destruct__','D',2,'选择'),(1,'答辩','答辩','答辩','答辩','答辩','A',3,'选择'),(2,' 以下属于面向对象的特征的是','重载','重写','封装','继承','C',3,'选择');
/*!40000 ALTER TABLE `tp_kt` ENABLE KEYS */;

#
# Structure for table "tp_lab"
#

DROP TABLE IF EXISTS `tp_lab`;
CREATE TABLE `tp_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shiyan_name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "tp_lab"
#

/*!40000 ALTER TABLE `tp_lab` DISABLE KEYS */;
INSERT INTO `tp_lab` VALUES (1,'如何搭建java开发环境',NULL),(2,'认识JAVA',NULL),(3,'异常处理机制',NULL),(4,'I/O接口',NULL),(5,'Java类集',NULL),(6,'JDBC',NULL),(7,'网络编程',NULL),(8,'图形用户界面',NULL);
/*!40000 ALTER TABLE `tp_lab` ENABLE KEYS */;

#
# Structure for table "tp_learning"
#

DROP TABLE IF EXISTS `tp_learning`;
CREATE TABLE `tp_learning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "tp_learning"
#

/*!40000 ALTER TABLE `tp_learning` DISABLE KEYS */;
INSERT INTO `tp_learning` VALUES (1,'· 使用Java进行Web开发的随想',NULL),(2,'. Java编程中异常处理的优劣之道',NULL),(3,'. 在Java应用程序中动态分配CPU资源',NULL),(4,'\r\n· 新手入门:写Java程序的三十个基本规则',NULL),(5,'· 菜鸟初学Java的备忘录之第一次接触',NULL),(6,'· Swing是MVC设计的典范',NULL);
/*!40000 ALTER TABLE `tp_learning` ENABLE KEYS */;

#
# Structure for table "tp_message"
#

DROP TABLE IF EXISTS `tp_message`;
CREATE TABLE `tp_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(11) DEFAULT NULL,
  `content` text,
  `path` varchar(255) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL COMMENT '外键',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_message"
#

/*!40000 ALTER TABLE `tp_message` DISABLE KEYS */;
INSERT INTO `tp_message` VALUES (1,'如何对java进行编译','如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译如何对java进行编译','hehe,txt',201345678,20131678),(2,'如何进行环境的配置','如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置如何进行环境的配置','58f1f124749bc.txt',1492250916,201314567),(3,'如何有效进行Java编','在进行初学java课程的过程中，会遇到一些问题，如何有效的进行java课程的学习？','590f03ffcd666.pdf',1494156287,2013181108),(7,'如何进行JAVA的编程','如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习如何进行JAVA的编程学习','591ef0c16724d.doc',1495199937,2013181009);
/*!40000 ALTER TABLE `tp_message` ENABLE KEYS */;

#
# Structure for table "tp_note"
#

DROP TABLE IF EXISTS `tp_note`;
CREATE TABLE `tp_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `createtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_note"
#

/*!40000 ALTER TABLE `tp_note` DISABLE KEYS */;
INSERT INTO `tp_note` VALUES (1,'上交第一次作业','2017-03-02'),(2,'交第一次实验报告','2017-03-02'),(3,'上交第二次作业','2017-02-03'),(4,'交第二次实验报告册','2017-03-09');
/*!40000 ALTER TABLE `tp_note` ENABLE KEYS */;

#
# Structure for table "tp_ppt"
#

DROP TABLE IF EXISTS `tp_ppt`;
CREATE TABLE `tp_ppt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_ppt"
#

/*!40000 ALTER TABLE `tp_ppt` DISABLE KEYS */;
INSERT INTO `tp_ppt` VALUES (1,'000000_【课程介绍 —— 写在前面的话】_Java学习概述笔记',NULL),(2,'010101_【第1章：JAVA概述及开发环境搭建】_JAVA发展概述笔记',NULL),(3,'010102_【第1章：JAVA概述及开发环境搭建】_Java开发环境搭建笔记',NULL),(4,'010201_【第2章：简单Java程序】_简单Java程序笔记',NULL),(5,'010301_【第3章：Java基础程序设计】_Java数据类型笔记',NULL),(6,'010302_【第3章：Java基础程序设计】_运算符、表达式与语句笔记',NULL),(7,'010401_【第4章：数组与方法】_数组的定义及使用笔记',NULL),(8,'020501_【第5章：面向对象基础】_面向对象、类与对象的定义笔记',NULL),(9,'020601_【第6章：面向对象（高级）】_继承的基本实现笔记',NULL),(10,'020702_【第7章：异常的基本概念】_异常的其他概念笔记',NULL),(11,'020801_【第8章：包及访问控制权限】_包的定义及导入笔记',NULL),(12,'030901_【第9章：多线程】_认识多线程笔记',NULL),(13,'031001_【第10章：泛型】_泛型入门笔记',NULL),(14,'031101_【第11章：Java常用类库】_StringBuffer笔记',NULL),(15,'031201_【第12章：JAVA IO】_File类笔记',NULL),(16,'031501_【第15章：Java反射机制】_认识Class类笔记',NULL),(17,'031601_【第16章：Annotation】_系统内建Annotation笔记',NULL),(18,'031701_【第17章：Java数据库编程】_JDBC概述笔记',NULL),(19,'031801_【第18章：图形界面】_AWT、Swing简介笔记',NULL);
/*!40000 ALTER TABLE `tp_ppt` ENABLE KEYS */;

#
# Structure for table "tp_resources"
#

DROP TABLE IF EXISTS `tp_resources`;
CREATE TABLE `tp_resources` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `belong` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "tp_resources"
#

/*!40000 ALTER TABLE `tp_resources` DISABLE KEYS */;
INSERT INTO `tp_resources` VALUES (1,'Java学习概述笔记',NULL,'电子书'),(2,'JAVA发展概述笔记',NULL,'实验报告册'),(3,'第01章_JAVA简介',NULL,'课件'),(4,'《java开发实战经典》',NULL,'电子书'),(5,'递归补充',NULL,'课件'),(6,'基础语法',NULL,'电子书'),(7,'面向对象',NULL,'课件'),(8,'Java开发环境搭建笔记',NULL,'课件'),(9,'简单Java程序笔记',NULL,'课件'),(10,'《深入理解Java虚拟机：JVM高级特性与最佳实践》',NULL,'电子书'),(11,'异常处理机制',NULL,'电子书');
/*!40000 ALTER TABLE `tp_resources` ENABLE KEYS */;

#
# Structure for table "tp_score"
#

DROP TABLE IF EXISTS `tp_score`;
CREATE TABLE `tp_score` (
  `score_id` int(11) NOT NULL AUTO_INCREMENT,
  `score_name` varchar(11) NOT NULL DEFAULT '0',
  `score_belong` int(11) NOT NULL,
  `score_score` int(10) NOT NULL,
  `score_time` varchar(50) NOT NULL,
  PRIMARY KEY (`score_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_score"
#

/*!40000 ALTER TABLE `tp_score` DISABLE KEYS */;
INSERT INTO `tp_score` VALUES (2,'李四',1,100,'2017-02-11 15:12:50'),(10,'小明',1,90,'2017-02-11 01:30:59'),(11,'王五',1,100,'2017-02-13 05:44:39'),(12,'赵六',1,20,'2017-04-14 03:23:02'),(13,'张三',1,100,'2017-03-14 15:12:55'),(14,'张飞',1,80,'2017-04-16 05:28:29'),(15,'赵云',1,60,'2017-04-16 05:30:48'),(16,'张三',2,40,'2017-04-24 09:09:04'),(17,'张三',3,80,'2017-05-01 10:09:04'),(18,'张三',1,60,'2017-05-07 07:22:48'),(19,'张三',1,0,'2017-05-17 09:06:49'),(20,'admin',1,0,'2017-05-17 09:24:45'),(21,'admin',1,20,'2017-05-17 09:25:12'),(22,'张三',1,60,'2017-05-19 09:37:38'),(23,'王五',1,40,'2017-05-19 07:40:10'),(24,'张三',1,40,'2017-05-20 01:34:26');
/*!40000 ALTER TABLE `tp_score` ENABLE KEYS */;

#
# Structure for table "tp_student"
#

DROP TABLE IF EXISTS `tp_student`;
CREATE TABLE `tp_student` (
  `stu_id` char(20) NOT NULL,
  `stu_name` varchar(30) NOT NULL,
  `stu_sex` char(4) NOT NULL,
  `stu_pwd` varchar(50) NOT NULL,
  `stu_telephone` char(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_student"
#

/*!40000 ALTER TABLE `tp_student` DISABLE KEYS */;
INSERT INTO `tp_student` VALUES ('2013181006','李四','男','2014256','12345678903'),('2013181007','赵云','男','123456','12345678903'),('2013181008','赵东','男','2014256','12345678903'),('2013181009','张三','男','123456','12345678903'),('2013181106','黄忠','男','123456','12345678903'),('2013181009','王五','男','123456','12345678903'),('2013181076','赵六','男','123456','123456789');
/*!40000 ALTER TABLE `tp_student` ENABLE KEYS */;

#
# Structure for table "tp_task"
#

DROP TABLE IF EXISTS `tp_task`;
CREATE TABLE `tp_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` varchar(255) DEFAULT NULL,
  `sid` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tp_task"
#

/*!40000 ALTER TABLE `tp_task` DISABLE KEYS */;
/*!40000 ALTER TABLE `tp_task` ENABLE KEYS */;

#
# Structure for table "tp_teacher"
#

DROP TABLE IF EXISTS `tp_teacher`;
CREATE TABLE `tp_teacher` (
  `teacher_id` char(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `teacher_sex` char(4) NOT NULL,
  `teacher_pwd` varchar(50) NOT NULL,
  `teacher_tno` char(20) DEFAULT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_teacher"
#

/*!40000 ALTER TABLE `tp_teacher` DISABLE KEYS */;
INSERT INTO `tp_teacher` VALUES ('2','李大壮','男','123','2017002'),('2017001','徐熙彤','女','123456','2017001'),('3','张小春','男','123456','2017003'),('4','李四','男','123456','2017004'),('5','许青青','女','123456','2017005'),('9','李明','男','123456','2017009');
/*!40000 ALTER TABLE `tp_teacher` ENABLE KEYS */;

#
# Structure for table "tp_video"
#

DROP TABLE IF EXISTS `tp_video`;
CREATE TABLE `tp_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_video"
#

/*!40000 ALTER TABLE `tp_video` DISABLE KEYS */;
INSERT INTO `tp_video` VALUES (1,'第01章_JAVA简介','5904261b2474a.mp4'),(2,'第02章_递归补充',NULL),(3,'第02章_基础语法',NULL),(4,'第03章_面向对象',NULL),(5,'第04章_异常处理',NULL),(6,'第05章_数组',NULL),(7,'第06章_常用类',NULL),(8,'第07章_容器',NULL),(9,'第08章_IO',NULL),(10,'第09章_线程',NULL),(11,'第10章_网络',NULL),(12,'第11章_GUI',NULL);
/*!40000 ALTER TABLE `tp_video` ENABLE KEYS */;

#
# Structure for table "tp_work"
#

DROP TABLE IF EXISTS `tp_work`;
CREATE TABLE `tp_work` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `create_time` int(9) NOT NULL DEFAULT '0',
  `sid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "tp_work"
#

/*!40000 ALTER TABLE `tp_work` DISABLE KEYS */;
INSERT INTO `tp_work` VALUES (1,'58f1c88baa66f.txt',1492240523,'2013181004'),(2,'58f1c8d6281c5.txt',1492240598,'2013181003'),(3,'58f1c8e1bc809.pdf',1492240609,'2013181002'),(4,'590f02a565039.pdf',1494155941,'2013181001'),(5,'5915225cc02b9.txt',1494557276,'2013181005'),(8,'59152384048b0.txt',1494557572,'2013181008'),(9,'59152415b36a2.pdf',1494557717,'2013181009'),(10,'59152468e3afe.pdf',1494557800,'2013181010'),(19,'591e4c4f8dbcd.docx',1495157839,NULL),(20,'591eeee5cd9ce.doc',1495199461,NULL);
/*!40000 ALTER TABLE `tp_work` ENABLE KEYS */;
