CREATE TABLE users
  id int(10) NOT NULL AUTO INCREMENT PRIMARY KEY,
  firstname varchar(255) NOT NULL,
  lastname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  urole varchar(255) NOT NULL,
  created at TIMESTAMP DEFAULT CURRENT TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET-utf8;
