create database BlogDatabase;
use BlogDatabase;

/*用户*/
create table users
( 
     userName char(20) not null unique ,
     password char(20) not null, 
     name varchar(30),
    `info` varchar(500) DEFAULT NULL COMMENT '个人简介',
     primary key(userName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- select * from users;

/*用户*/
insert into users values('18316722273','12','邬坤源','我是沙口啊');


-- 属于某个user的blog-- 
CREATE TABLE `blog_content` (
  `blog_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userName` char(20) COMMENT'作者账号',
  `name` varchar(40) DEFAULT NULL COMMENT '作者昵称', 
  `type` varchar(40) DEFAULT NULL COMMENT '博客类别', 
  `title` varchar(40) DEFAULT NULL COMMENT '博客标题', 
  `content` varchar(2000) COMMENT'博客内容',
  `create_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`blog_id`)
);

insert into blog_content value (1,'18316722273','邬坤源','java','第一篇java笔记','哈哈哈哈哈哈java笔记很好看',CURRENT_TIMESTAMP);
insert into blog_content value (2,'18316722273','邬坤源','web开发','第一篇web笔记','哈哈哈哈哈哈web笔记很好看',CURRENT_TIMESTAMP);
insert into blog_content value (3,'18316722273','邬坤源','vue学习','第一篇vue笔记','哈哈哈哈哈哈vue笔记很好看',CURRENT_TIMESTAMP);
insert into blog_content value (4,'18316722273','邬坤源','axios笔记','第一篇axios笔记','哈哈哈哈哈哈axios笔记很好看',CURRENT_TIMESTAMP);




-- u某个user自己分类的blog类别-- 
CREATE TABLE `blog_type` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  userName char(20) COMMENT'作者账号',
  `type` varchar(40) DEFAULT NULL COMMENT '类别', 
  PRIMARY KEY (`type_id`)
) ;
insert into blog_type value (1,'18316722273','java');
insert into blog_type value (2,'18316722273','web开发');
insert into blog_type value (3,'18316722273','vue学习');
insert into blog_type value (4,'18316722273','axios笔记');
