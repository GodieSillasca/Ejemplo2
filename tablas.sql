CREATE TABLE personal 
(
	id_personal int(10) PRIMARY KEY,
	nombre varchar(100) NOT NULL
);

CREATE TABLE tipo_usuario
(
	id_tipo int(10) PRIMARY KEY,
	tipo varchar(100) NOT NULL
);

CREATE TABLE usuario
(
	id_usuario int(10)  PRIMARY KEY,
	nombre_usuario varchar(100) NOT NULL,
	password varchar(20) NOT NULL,
	id_personal int(10) NOT NULL,
	id_tipo int(10) NOT NULL
);

CREATE TABLE productos
(
	id int(10)  PRIMARY KEY,
	nombre varchar(100) NOT NULL,
	descripcion text NOT NULL,
	imagen text NOT NULL,
	precio double NOT NULL
);

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`) VALUES (NULL, 'Reloj Casio Dama Piel', 'Fechador Cristal Mineral', 'reloj.jpeg', '759'), (NULL, 'Pantuflas Ferrato Homero Simpson', 'Divertidas Pantuflas de Homero Simpson\r\n¡Me quiero volver chango!', 'pantuflas.jpeg', '429'), (NULL, 'Camisa Para Hombre Tipo Denim', 'Camisa de moda para hombre ;D', 'camisa.jpeg', '347'), (NULL, 'Taladro Inalambrico', 'Taladro Inalambrico De 18 Volts Mandril 3/8 Pulg', 'taladro.jpeg', '680'), (NULL, 'Sueter Casual', 'Sueter Casual D.e.e.p Selection Ge33.', 'sueter.jpeg', '479'), (NULL, 'Laptop Gamer Dell', 'Laptop Gamer Dell G3 I5 8300h 8gb Nvidia Geforce Gtx 1050', 'laptop.jpeg', '20339'), (NULL, 'Teléfono celular retro', 'Sé el más cool de tus amigos hipster con tu nuevo celular Sony Ericsson W300!!!', 'w300.jpeg', '1500'), (NULL, 'Temporada 1 Zaboomafoo', 'Temporada 1 Zaboomafoo DVD 2 Discos HD', 'zab.jpeg', '521'), (NULL, 'Biblia', 'Biblia Latinoamericana Edición Especial Pasta Dura', 'biblia.jpeg', '666'), (NULL, 'Balón marca Wilson', 'Wilson, amigo inseparable ;D', 'wilson.jpeg', '987'), (NULL, 'Ropa Interior Selecta', 'Ropa Interior Selecta Poli Secret para Caballero talla mini', 'tanga.jpeg', '70'), (NULL, 'Guitarra', 'Guitarra Manson Rust Relic, única en el mundo!', 'guitarra.jpeg', '100000'), (NULL, 'Zapatillas de Lucha', 'Zapatillas de lucha olímpica Adidas Response Wrestling 1, modelo de colección dificil de conseguir', 'zapato.jpeg', '3000'), (NULL, 'Figura de Naruto', 'Lord Nanadaime-sama Kyuubi no Jinchuuriki Dattebayo!', 'naruto.jpeg', '1010'), (NULL, 'Brújula Brunton', 'Brújula que indica el norte', 'brujula.jpeg', '21000');