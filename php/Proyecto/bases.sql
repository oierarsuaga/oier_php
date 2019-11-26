create database login;

create table datos(
  id int auto_increment,
  title varchar (100),
  info varchar (250),
  img varchar (100),
);

create table blog(
  usuario varchar (50),
  password varchar (50),
);

insert into blog(usuario,password) values('koxme','k1');
