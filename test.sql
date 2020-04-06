create table users (
	user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	user_usermane varchar(256) not null,
	user_email varchar(256)
);

insert into users (user_usermane, user_email) values ('maxwell', 'maxwell@gmail.com');
	insert into users (user_usermane, user_email) values ('pato', 'pato@gmail.com');