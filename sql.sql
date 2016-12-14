#创建运动会报名系统
create database schoolActive;
#设置字符集
set names gbk;
#使用数据库
use schoolActive;
#学生表
create table student(
    stu_id int primary key auto_increment,
    stu_name varchar(25) not null default '',
    stu_xuehao varchar(25) not null default '',
    stu_pwd varchar(65) not null default '',
    stu_sex varchar(25) not null default '',
    stu_grade int not null default 0,
    stu_class int not null default 0
);
#年级表
create table grade(
    grade_id int primary key auto_increment,
    grade_name varchar(25) not null default ''
);
#班级表
create table class(
    class_id int primary key auto_increment,
    class_name varchar(25) not null default ''
);
#项目表
create table project(
    pro_id int primary key auto_increment,
    pro_name varchar(25) not null default ''
);
#报名表
create table enter(
    ent_id int primary key auto_increment,
    ent_stu_id int not null default 0,
    ent_grade_id int not null default 0,
    ent_class_id int not null default 0,
    ent_pro_id int not null default 0,
    ent_pro_sex varchar(25) not null default '',
    ent_add_time date not null default '0000-00-00'
);
#成绩表
create table score(
    sco_id int primary key auto_increment,
    sco_stu_id int not null default 0,
    sco_grade_id int not null default 0,
    sco_class_id int not null default 0,
    sco_pro_id int not null default 0,
    sco_pro_sex varchar(25) not null default '',
    sco_score int not null default 0
);
#名次表
create table win(
    win_id int primary key auto_increment,
    win_name varchar(25) not null default ''
);
#管理员表
create table admin(
    adm_id int primary key auto_increment,
    adm_name varchar(25) not null default '',
    adm_pwd varchar(25)not null default '',
    adm_sex varchar(10) not null default ''
);