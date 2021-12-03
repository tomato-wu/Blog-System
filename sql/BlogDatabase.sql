create database BlogDatabase;
use BlogDatabase;

/*用户*/
create table users
( 
     userName char(20) not null unique, 
     password char(20) not null, 
     name varchar(30),
     primary key(userName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- select * from users;

/*管理员*/
create table admins
( 
    adminName char(20) not null unique, 
     password char(20) not null, 
     name varchar(30),
     primary key(adminName)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*用户*/
insert into users values('18316722273','12','邬坤源');
insert into users values('20191003155','123','沙口');

/*管理员*/
insert into admins values('20191003027','12','小番茄夫斯基');