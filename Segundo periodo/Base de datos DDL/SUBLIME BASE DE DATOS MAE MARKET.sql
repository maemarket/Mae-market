create database mae;
	use mae;

create table cliente(
id_cliente varchar (15) not null,
p_nombre varchar(25) not null,
s_nombre varchar(25) null,
p_apellido varchar(25) not null,
s_apellido varchar(25) null,
tel int (20) not null,
direccion varchar(20) not null,
email varchar(25) not null,
primary key(id_cliente)
);


create table cotizacion(
id_cotizacion int (10) not null,
fecha_cot datetime not null,
sub_total int(15) not null,
iva int (15) not null,
total int(15) not null,
cliente_id_cliente varchar(15) not null,
vendedor_id_vendedor int not null,
primary key(id_cotizacion,cliente_id_cliente,vendedor_id_vendedor)
);

create table vendedor(
id_vendedor int not null,
p_nombre varchar(25) not null,
s_nombre varchar(25) null,
p_apellido varchar(25) not null,
s_apellido varchar(25) null,
primary key(id_vendedor)
);

create table producto(
id_producto varchar (15) not null,
producto varchar(15) not null,
cantidad int (5) not null,
descripcion varchar (40) not null,
valor_u int(25) not null,
valor_t int (25) not null,
primary key(id_producto)
);

create table relacion_cotizacion_producto(
fkpk_id_producto varchar (15),
pk_id_cotizacion int (10),
primary key(fkpk_id_producto, pk_id_cotizacion)
);

alter table cotizacion add
foreign key (cliente_id_cliente)
references cliente (id_cliente);

alter table cotizacion add
foreign key (vendedor_id_vendedor)
references vendedor (id_vendedor);

alter table relacion_cotizacion_producto add
foreign key (fkpk_id_producto)
references producto(id_producto);

alter table relacion_cotizacion_producto add
foreign key (pk_id_cotizacion)
references cotizacion(id_cotizacion);




