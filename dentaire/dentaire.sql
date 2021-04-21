drop database if exists dentaire;
create database dentaire;
	use dentaire;

	create table medecin
		(numM int(3) not null auto_increment,
			nomM varchar(50),
			prenomM varchar(50),
			specialiste varchar(50),
			adresse varchar(70),
			email varchar(70),
			tel varchar(10),
		primary key(numM)
		);

		insert into medecin values 
			(null, 'MARTIN','Gabriel', 'ORTHODONTISTE', '7 rue de Paris', 'MG15@gmail.com', '0758151320'),
			(null, 'DUBOIS','Louis', 'ENDODONTISTE', '12 rue de Montreuil', 'DL24@gmail.com', '0618153344');

	create table patient
		(numdos int(3) not null auto_increment,
			nomP varchar(50),
			prenomP varchar(50),
			datenaissP date,
			sexe enum('female','male'),
			adresse varchar(70),
			email varchar(70),
			numsecu varchar(13),
			tel varchar(10),
			primary key(numdos)
		);

		insert into patient values 
			(null, 'ROBERT','Leo', '1976-08-03' , 'male', '15 rue Mozart', 'RL83@gmail.com', 0150661133551,'0752194299'),
			(null, 'THOMAS','Raphael', '1960-04-08' , 'male','12 rue des Chatons ', 'TR48@gmail.com', 0655113322443, '0688449922');

	create table salle
		(numS int(3) not null auto_increment,
			nomS varchar(25),
			typeS varchar(20),
			primary key(numS)
		);

		insert into salle values
			(null, 'R1','radiologie'),
			(null, 'S1','soin');

	create table asisstant
		(numA int(3) not null auto_increment,
			nomA varchar(50),
			prenomA varchar(50),
			adresse varchar(70),
			email varchar(70),
			tel varchar(10),
		primary key(numA)
		);

		insert into asisstant values
			(null, 'LAURENT', 'Emma', '5 rue du Four', 'LE18@gmail.com', '0759088659' ),
			(null, 'DUBOIS','Camille','10 rue des Vapos', 'DCcomic@gmail.com', '0655532251');


	create table consultation
		(numC int(3) not null auto_increment,
			numdos int(3),
			numM int(3),
			numS int(3),
			numA int(3),
			typeC varchar(20),
			dateC date,
			heureC time,
			primary key(numC),
			foreign key(numdos) references patient(numdos),
			foreign key(numM) references medecin(numM),
			foreign key(numS) references salle(numS),
			foreign key(numA) references asisstant(numA)

		);

		insert into consultation values
			(null, 1, 2, 1, 2, 'endodontologie', '2019-01-17','08:30:00'),
			(null, 2, null, 2, 1, 'soin', '2019-01-28','14:00:00');
