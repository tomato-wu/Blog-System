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
insert into users values('18316722273','12','邬坤源','这里是作者的个人说明，本系统使用html,css,javascript和bootstrap框架以及php搭建的一个简易的个人博客系统');


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

insert into blog_content value (1,'18316722273','邬坤源','前端','前端博客笔记','我是前端博客笔记',CURRENT_TIMESTAMP);
insert into blog_content value (2,'18316722273','邬坤源','vue','vue相关的笔记','这里是vue相关的笔记',CURRENT_TIMESTAMP);
insert into blog_content value (3,'18316722273','邬坤源','html','html内容','超文本标记语言（英语：HyperText Markup Language，简称：HTML）是一种用于创建网页的标准标记语言。您可以使用 HTML 来建立自己的 WEB 站点，HTML 运行在浏览器上，由浏览器来解析。

在本教程中，您将学习如何使用 HTML 来创建站点。

',CURRENT_TIMESTAMP);
insert into blog_content value (4,'18316722273','邬坤源','php','第一篇php笔记','我的第一篇php笔记',CURRENT_TIMESTAMP);
insert into blog_content value (5,'18316722273','邬坤源','生活感悟','关于资产和负债的理解','如果你想变富，只需要不断买入资产，如果你想变穷，只需要不断买入负债

曾经有人说过，如果你想变富，只需要在一生中不断买入资产，如果你想变穷，只需要在一生中不断买入负债。

什么是资产？资产是可以给我们带来持续性收益的商品。资产要带来持续性收益主要有两种形式，第一，稳定收益；第二，资产增值与资产变现。

如果你买入一套房子，你可以将房子租出去，收取租金，这就是稳定收益；你也可以持有房产，坐等市场房价上涨然后卖出，这就是资产增值与资产变现。

如果你买入股票或基金，你可以长期持有，收取分红收益，这就是稳定收益；还可以等面值上涨卖出变现赚取差价，这就是资产增值与资产变现。

不动产资产和金融资产是最常见的两种资产，由于变现难以不同，对于不动产，更常见的是收取租金，对于金融资产，更多的赚取差价。

什么是负债？负债是无法给你带来持续性收益的商品，负债只会不断消耗你的金钱。你的车子、智能手机、笔记本电脑、名牌手表、金银首饰、包包都无法给你带来收益，它们只能不断消耗你的金钱，都是负债。

更多的资产，更少的负债

资产与负债的讨论最先起源于美国作者罗伯特·清崎的《富爸爸与穷爸爸》一书中，在书中，作者将赚钱的方式分为四个象限，B象限 代表 Business Owner公司，I象限 代表 Investor 投资者，E象限 代表 Employee 雇员，S象限 代表 Self-employed自由职业者。只是，这本书中，对于资产的解释就是不用工作，持续性的被动收入，仅将创立公司作为创立资产，这里觉得这个范围太过狭隘，本文中将房产投资、定投基金、自我提升、日常健身都可以算作是一个人重要的资产。

在合理理财的人生路程中，我们需要配置更多的资产，更少的负债。

我们需要尽早购买房子（即使是贷款），但是对于车子，满足代步需求即可；

我们需要定投沪深300指数基金，但是智能手机和笔记本电脑，能够满足工作和生活需求即可；

我们需要将更多的时间和精力投入到自我专业技术的提升，同时减少日常旅游、聚餐消费这些活动；

我们需要每周抽出一些时间用于锻炼身体，同时减少电子游戏、网上购物和观看肥皂剧的时间；

我们需要购买生活必须的食物、服装和日用品，同时减少金银首饰和名牌包包的消费。

更早的建立资产，更早的财务自由

第一资产，健康的身体，健康资产所有资产的基础，拥有健康的身体不用获得稳定收益，但是可以减少你在医疗中的花费，拥有健康的身体是你参加劳动和工作的基础；

第二资产，存款资产，存款资产是最重要的资产，存款来自劳动收入和资产收入，劳动收入的增加来自自己专业技术的提升，资产收入来自稳定收益和资产增值；

第三资产，朋友资产，你的朋友是你的又一个重要的资产，多一个朋友多一条路，多一个敌人多一堵墙，更多的朋友，可以让你在顺境中游刃有余，可以让你在逆境中绝处逢生。

此生，唯有健康、存款不负你。',CURRENT_TIMESTAMP);





-- u某个user自己分类的blog类别-- 
CREATE TABLE `blog_type` (
  `type_id` int(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  userName char(20) COMMENT'作者账号',
  `type` varchar(40) DEFAULT NULL COMMENT '类别', 
  PRIMARY KEY (`type_id`)
) ;
insert into blog_type value (1,'18316722273','前端');
insert into blog_type value (2,'18316722273','vue');
insert into blog_type value (3,'18316722273','html');
insert into blog_type value (4,'18316722273','php');
insert into blog_type value (5,'18316722273','生活感悟');

