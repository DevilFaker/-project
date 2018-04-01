create database if not exists 'shop';
use 'shop';
create table 'shop_user'(
 'id' tinyint unsigned auto_increment key,
'username' varchar2(20) ,
'password' varchar2(32),
'email'    varchar2(50)
    );
 $query="insert shop_user(username,password,email)values("Faker","123","625018684@qq.com")";