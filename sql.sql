CREATE TABLE Patient(
   id_patient COUNTER NOT NULL,
   NumeroSecu INT,
   nom VARCHAR(50),
   prenom VARCHAR(50),
   telephone INT,
   adresse VARCHAR(50),
   ville VARCHAR(50),
   codePostal INT,
   dateNaissance DATE,
   lieuNaissance VARCHAR(50),
   civilite VARCHAR(50),
   PRIMARY KEY(id_patient)
);

CREATE TABLE Medecin(
   Id_Medecin COUNTER,
   civilite VARCHAR(50),
   nom VARCHAR(50),
   prenom VARCHAR(50),
   PRIMARY KEY(Id_Medecin)
);

CREATE TABLE Consulter(
   Id_Medecin INT,
   id_patient INT,
   dateRdv DATE,
   heureRdv TIME,
   duree TIME,
   PRIMARY KEY(Id_Medecin, id_patient),
   FOREIGN KEY(Id_Medecin) REFERENCES Medecin(Id_Medecin),
   FOREIGN KEY(id_patient) REFERENCES Patient(id_patient)
);

CREATE TABLE Referent(
   id_patient INT,
   O_N INT,
   Id_Medecin INT NOT NULL,
   PRIMARY KEY(id_patient),
   FOREIGN KEY(id_patient) REFERENCES Patient(id_patient),
   FOREIGN KEY(Id_Medecin) REFERENCES Medecin(Id_Medecin)
);
