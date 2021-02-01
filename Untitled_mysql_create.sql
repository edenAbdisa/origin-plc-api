CREATE TABLE users (
	id   BINARY NOT NULL ,
	email varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	type varchar(50) NOT NULL,
	status varchar(50) NOT NULL,
	email_verified_at date NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY (email)  );

CREATE TABLE containertype (
	id BINARY NOT NULL,
	name varchar(100) NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY (id) 
);
CREATE TABLE djiclearing (
	billoflading varchar(255) NOT NULL,
	start DATE NOT NULL,
	ending DATE NOT NULL,
	loadingdate DATE NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY (id)
,id   BINARY NOT NULL  );

CREATE TABLE ethclearing (
	billoflading varchar(255) NOT NULL,
	registereddate DATE NOT NULL,
	dtl DATE NOT NULL,
	sendingtocustom DATE NOT NULL,
	customprocessstart DATE NOT NULL,
	transitpermitted DATE NOT NULL,
	sendingtodjbouti DATE NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY (id)
,id   BINARY NOT NULL  );

CREATE TABLE itemtype (
	billoflading varchar(50) NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	PRIMARY KEY (name)
,id   BINARY NOT NULL  );

CREATE TABLE responsefromwebsite (
	id varchar(255) NOT NULL,
	senderemail varchar(255) NOT NULL,
	message VARCHAR(255) NOT NULL,
	service varchar(255) NOT NULL,
	status varchar(50) NOT NULL,
	timestamp TIMESTAMP(50) NOT NULL,
	phonenumber varchar(50) NOT NULL,
	PRIMARY KEY (id)
,id   BINARY NOT NULL  );

CREATE TABLE item (
	operationnumber varchar(255) NOT NULL,
	docrecieveddate DATE NOT NULL,
	customername varchar(255) NOT NULL,
	billoflading varchar(255) NOT NULL,
	declarationnumber varchar(255) NOT NULL,
	vessel varchar(255) NOT NULL,
	shippingline varchar(255) NOT NULL,
	timestamp TIMESTAMP NOT NULL,
	portofloading varchar(255) NOT NULL,
	package INT NOT NULL,
	weightofcargo FLOAT NOT NULL, 
	estimatedtimearrival DATE NOT NULL,
	actualtimearrival DATE NOT NULL,
	dispatcheddate DATE NOT NULL,
	arrivalatdryport DATE NOT NULL,
	cargodischarging DATE NOT NULL,
	finaldeclarationissued DATE NOT NULL,
	paymenteffected FLOAT NOT NULL,
	finaldeclarationdelivered varchar(30) NOT NULL,
	timestamp varchar(30) NOT NULL,
	email varchar(255) NOT NULL,
	PRIMARY KEY (itemnumber)
,id   BINARY NOT NULL  );

ALTER TABLE djiclearing ADD CONSTRAINT djiclearing_fk0 FOREIGN KEY (itemid) REFERENCES item(itemnumber,id   BINARY NOT NULL  );

ALTER TABLE ethclearing ADD CONSTRAINT ethclearing_fk0 FOREIGN KEY (itemid) REFERENCES item(itemnumber,id   BINARY NOT NULL  );

ALTER TABLE item ADD CONSTRAINT item_fk0 FOREIGN KEY (type) REFERENCES itemtype(name,id   BINARY NOT NULL  );

