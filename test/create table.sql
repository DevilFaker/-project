create table user_detail(

username varchar2(20),
password varchar2(20),
email varchar2(50),
firstname varchar2(20),
lastname varchar2(20),
address  varchar2(20),
city  varchar2(20),
company varchar2(20),
postcode number(10),
telephone number(20),
state  varchar2(20),
country varchar2(20),
cardname varchar2(20),
cardnumber number(20),
expriyyear number(4),
expriymonth number(2)
cvv number(3)

);

create table product_detail(
id  number(4),
num   number(4),
name  varchar2(20),
price  number(4),
src   varchar2(30),
username  varchar2(20)

);

create table ordersummay(
ordersubtotal number(10),
shipping  number(10),
total  number(10),
ship  number(10),

);

create table order_info(
order_id number(4),
dd date;
total number(4)




)