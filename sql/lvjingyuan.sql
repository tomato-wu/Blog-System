
drop database if exists blogSystem;

create database blogSystem;
USE `blogSystem`;

-- user 表-- 
CREATE TABLE `user` (
  `id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `username` varchar(40) DEFAULT NULL COMMENT '用户名',
  `password` varchar(40) DEFAULT NULL COMMENT '密码',
  `info` varchar(500) DEFAULT NULL COMMENT '个人简介',
  PRIMARY KEY (`id`)
) ;

/*Data for the table `users` */
insert into user value (1,'root','123','大家好，我叫吕璟源，广外大一新生在读。这是我的个人博客。本人主要学习web开发，包含HTML5，CSS3,JS,Java,正在学习Vue.js、Angular、Node.js等前后端框架，同时也在学习机器学习的相关知识，包括模式识别。 以后我会在这里分享各种学习心得和遇到的问题。');


-- 属于某个user的blog-- 
CREATE TABLE `blog_text` (
  `blog_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(20) COMMENT'作者id',
  `username` varchar(40) DEFAULT NULL COMMENT '作者', 
  `type` varchar(40) DEFAULT NULL COMMENT '类别', 
  `title` varchar(40) DEFAULT NULL COMMENT '标题', 
  `text` varchar(2000) COMMENT'内容',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`blog_id`)
) ;
insert into blog_text value (1,1,'admin','java','第一篇java笔记','哈哈哈哈哈哈java笔记很好看',CURRENT_TIMESTAMP);
insert into blog_text value (2,1,'admin','web开发','第一篇web笔记','哈哈哈哈哈哈web笔记很好看',CURRENT_TIMESTAMP);
insert into blog_text value (3,1,'admin','vue学习','第一篇vue笔记','哈哈哈哈哈哈vue笔记很好看',CURRENT_TIMESTAMP);
insert into blog_text value (4,1,'admin','axios笔记','第一篇axios笔记','哈哈哈哈哈哈axios笔记很好看',CURRENT_TIMESTAMP);



-- u某个user自己分类的blog类别-- 
CREATE TABLE `blog_type` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(20) COMMENT'作者id',
  `type` varchar(40) DEFAULT NULL COMMENT '类别', 
  PRIMARY KEY (`type_id`)
) ;
insert into blog_type value (1,1,'java');
insert into blog_type value (2,1,'web开发');
insert into blog_type value (3,1,'vue学习');
insert into blog_type value (4,1,'axios笔记');

