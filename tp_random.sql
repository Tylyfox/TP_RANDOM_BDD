#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: TP_RANDOM
#------------------------------------------------------------

CREATE TABLE TP_RANDOM(
        ID            Int  Auto_increment  NOT NULL ,
        nom           Varchar (20) NOT NULL ,
        prenom        Varchar (20) NOT NULL ,
        dateNaissance Date NOT NULL
	,CONSTRAINT TP_RANDOM_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;

