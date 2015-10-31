
drop table if exists gonggao ;

create table gonggao
(
   id int(11) auto_increment not null primary key,
   time varchar(50) not null default "",
   title varchar(50) not null default "",
   content text not null 
);
