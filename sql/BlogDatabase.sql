drop database if exists BlogDatabase;

create database BlogDatabase;
use BlogDatabase;

/*用户*/
create table users
( 
     userName char(20) not null unique ,
     password char(20) not null, 
     name varchar(30),
     primary key(userName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- select * from users;

/*用户*/
insert into users values('18316722273','12','邬坤源');
insert into users values('20191003155','123','沙口');


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

-- u某个user自己分类的blog类别-- 
CREATE TABLE `blog_type` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `user_id` int(20) COMMENT'作者id',
  `type` varchar(40) DEFAULT NULL COMMENT '类别', 
  PRIMARY KEY (`type_id`)
) ;