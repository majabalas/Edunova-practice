drop database if exists daos;
create database daos;
use daos;

create table daos(
sifra int not null primary key auto_increment,
oib char(11) not null,
adresa varchar(50) not null,
email varchar(50) not null,
telefon varchar(50) not null,
prostorija varchar(50) not null
);


create table gradivo(
sifra int not null primary key auto_increment,
vrsta varchar(50) not null,
datumUnosa datetime not null,
datumStvaranja datetime not null,
vlasnik varchar(50) not null,
lokacija varchar(50) not null,
korisnik int not null,
daos int not null
);

create table korisnik(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
prezime varchar(50) not null,
gradivo int not null,
daos int not null
);

create table obrazac(
sifra int not null primary key auto_increment,
datumKoristenja datetime not null,
svrhaKoristenja varchar(500) not null,
gradivo int not null,
korisnik int not null
);

alter table gradivo add foreign key (korisnik) references korisnik(sifra);
alter table gradivo add foreign key (daos) references daos(sifra);

alter table korisnik add foreign key (gradivo) references gradivo(sifra);
alter table korisnik add foreign key (daos) references daos(sifra);

alter table obrazac add foreign key (korisnik) references korisnik(sifra);
alter table obrazac add foreign key (gradivo) references gradivo(sifra); 
