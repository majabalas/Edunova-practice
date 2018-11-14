drop database if exists kavissimo;
create database kavissimo;
use kavissimo;

create table kavissimo(
sifra int not null primary key auto_increment,
administrator varchar(50) not null,
mreznoMjesto varchar(50) not null
);

create table kafic(
sifra int not null primary key auto_increment,
oib char(11) not null,
naziv varchar(50) not null,
lokacija varchar(50) not null,
dodatnePogodnosti varchar(200) not null,
kontakt varchar(50) not null,
vrsteKave varchar(200) not null,
fotografijaCjenika varchar(50) not null,
vlasnik varchar(50) not null,
kucniLjubimci boolean not null,
wifi varchar(50) not null,
kavissimo int not null,
korisnik int not null,
obrazac int not null
);

create table korisnik(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
prezime varchar(50) not null,
datumPosjete datetime not null,
kafic int not null,
kavissimo int not null
);

create table kafic_korisnik(
sifra int not null primary key auto_increment,
recenzija varchar(500) not null,
kafic int not null,
korisnik int not null
);

create table obrazac(
sifra int not null primary key auto_increment,
nazivKafica varchar(50) not null,
lokacijaKafica varchar(50) not null,
dodatnePogodnostiKafica varchar(200) not null,
kontaktKafica varchar(50) not null,
vrsteKaveKafica varchar(200) not null,
fotografijaCjenikaKafica varchar(50) not null,
vlasnikKafica varchar(50) not null,
kucniLjubimciKafica boolean not null,
wifiKafica varchar(50) not null,
kavissimo int not null
);

alter table kafic add foreign key (kavissimo) references kavissimo(sifra);
alter table kafic add foreign key (korisnik) references korisnik(sifra);
alter table kafic add foreign key (obrazac) references obrazac(sifra);

alter table korisnik add foreign key (kavissimo) references kavissimo(sifra);
alter table korisnik add foreign key (kafic) references kafic(sifra);

alter table kafic_korisnik add foreign key (kafic) references kafic(sifra);
alter table kafic_korisnik add foreign key (korisnik) references korisnik(sifra);

alter table obrazac add foreign key (kavissimo) references kavissimo(sifra);
