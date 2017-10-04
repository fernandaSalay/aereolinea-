create table puesto(
nombre_P varchar(50),
primary key (nombre_P)
);

create table tripulacion(
idiomas varchar(100),
estudios_realizados varchar(1000),
experiencia varchar(40),
horas_vuelo integer,
nombre_T varchar(50),
nacionalidad varchar(50),
email varchar(40),
contacto_emergencia integer,
tiempo_pertenecer integer,
nombre_P varchar(50),
primary key (email),
foreign key (nombre_P) references puesto
);

create table avion(
Marca varchar(50),
Modelo varchar(40),
capacidadCombustible integer,
capacidadPeso integer,
MillasRecorridas integer,
Matricula varchar(20),
primary key (matricula)
);



create table servicios(
fecha date,
info_servicio varchar(1000),
Matricula varchar(20),
primary key (fecha),
foreign key (matricula) references avion
);

create table aeropuerto(
cod varchar(10),
nombre_A varchar(50),
primary key (cod)
);

create table ruta(
no_ruta integer,
cod varchar(10),
destino varchar(50),
origen varchar(50),
primary key (no_ruta),
foreign key (cod) references aeropuerto
);


create table vuelo(
h_aterrizaje time,
fecha_v date,
h_despegue time,
precio integer,
status integer,
matricula varchar(20),
no_ruta integer,
email varchar(40),
primary key (fecha_v),
foreign key (matricula) references avion,
foreign key (no_ruta) references ruta,
foreign key (email) references tripulacion
);

create table pasajeros(
email_p varchar(40),
nombre_C varchar (50),
no_boleto integer,
no_asiento integer,
fecha_hora_abordaje timestamp,
fecha_hora_desabordaje timestamp,
fecha_v date,
primary key (no_boleto),
foreign key (fecha_v) references vuelo
);


