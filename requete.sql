#################################################################################
###########################TABLES ET CLES PRIMAIRES##############################
#################################################################################

create table utilisateur 
(
    codeUtilisateur INT NOT NULL, #Clé primaire
    pseudo VARCHAR(20),
    login VARCHAR(20),
    password VARCHAR(255),
    mail VARCHAR(255),
    codeNiveauSecurite INT NOT NULL, #Clé étrangère provenant de niveauSecurite
    PRIMARY KEY (codeUtilisateur)
);

create table niveauSecurite
(
   codeNiveauSecurite INT NOT NULL, #Clé primaire
   nomNiveauSecurite VARCHAR(255), 
   PRIMARY KEY (codeNiveauSecurite)
);

create table groupe
(
   codeGroupe INT NOT NULL, #Clé primaire
   nomGroupe VARCHAR(255),
   PRIMARY KEY (codeGroupe)
);

create table groupeUtilisateur
(
   codeGroupe INT NOT NULL, #Clé étrangère provenant de groupe
   codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur
   CONSTRAINT pk_groupeUtilisateur PRIMARY KEY (codeUtilisateur, codeGroupe)
);

create table envoiMessage
(
   codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur
   codeGroupe INT NOT NULL, #Clé étrangère provenant de groupe
   dateHeure DATETIME NOT NULL, #Clé primaire
   texte TEXT, 
   CONSTRAINT pk_envoimessage PRIMARY KEY (codeUtilisateur, codeGroupe, dateHeure)
);

create table theme
(
    codeTheme INT NOT NULL, #Clé primaire
    libelleTheme VARCHAR(255), 
    accepté boolean, 
    codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur 
    CONSTRAINT pk_theme PRIMARY KEY (codeTheme, codeUtilisateur)
);

create table estParentDe
(
   codeThemeParent INT NOT NULL, #Clé étrangère provenant de thème
   codeThemeEnfant INT NOT NULL, #Clé étrangère provenant de thème
   CONSTRAINT pk_estParentDe PRIMARY KEY (codeThemeParent, codeThemeEnfant)
);

create table postAnnonce
(
   codePostAnnonce INT NOT NULL, #Clé Primaire
   texte TEXT,
   codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur
   CONSTRAINT pk_postAnnonce PRIMARY KEY (codePostAnnonce, codeUtilisateur)
);

create table annonceRefTheme
(
   codePostAnnonce INT NOT NULL, #Clé étrangère provenant de postAnnonce
   codeTheme INT NOT NULL, #Clé étrangère provenant de theme
   CONSTRAINT pk_annonceRefTheme PRIMARY KEY (codePostAnnonce, codeTheme)
);


create table revocation
(
   codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur
   dateFinRevocation DATETIME,
   libelle VARCHAR(255),
   PRIMARY KEY (codeUtilisateur)
);

create table postConnaissance
(
    codePostConnaissance INT NOT NULL, #Clé Primaire
    texte TEXT,
    accepte BOOLEAN,
    codeUtilisateur INT NOT NULL, #Clé étrangère provenant d'utilisateur
    codeTheme INT NOT NULL, #Clé étrangère provenant de theme
    CONSTRAINT pk_postAnnonce PRIMARY KEY (codePostConnaissance, codeTheme,codeUtilisateur)
);

#################################################################################
###############################CLES ETRANGERES ##################################
#################################################################################


ALTER TABLE utilisateur ADD CONSTRAINT fk_utilisateursecurite FOREIGN KEY (codeNiveauSecurite) REFERENCES niveauSecurite(codeNiveauSecurite) ;

ALTER TABLE groupeUtilisateur ADD CONSTRAINT fk_groupeutilisateur FOREIGN KEY (codeGroupe) REFERENCES groupe(codeGroupe);
ALTER TABLE groupeUtilisateur ADD CONSTRAINT fk_utilisateurgroupe FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur);

ALTER TABLE envoiMessage ADD CONSTRAINT fk_destinataire FOREIGN KEY (codeGroupe) REFERENCES groupe(codeGroupe);
ALTER TABLE envoiMessage ADD CONSTRAINT fk_expediteur FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur);

ALTER TABLE theme ADD CONSTRAINT fk_moderateur FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur) ;

ALTER TABLE estParentDe ADD CONSTRAINT fk_parent FOREIGN KEY (codeThemeParent) REFERENCES theme(codeTheme) ;
ALTER TABLE estParentDe ADD CONSTRAINT fk_enfant FOREIGN KEY (codeThemeEnfant) REFERENCES theme(codeTheme) ;

ALTER TABLE postAnnonce ADD CONSTRAINT fk_createurAnnonce FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur);

ALTER TABLE annonceRefTheme ADD CONSTRAINT fk_themePostAnnonce FOREIGN KEY (codePostAnnonce) REFERENCES postAnnonce(codePostAnnonce) ;

ALTER TABLE revocation ADD CONSTRAINT fk_revocationUtilisateur FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur) ;

ALTER TABLE postConnaissance ADD CONSTRAINT fk_createurConnaissance FOREIGN KEY (codeUtilisateur) REFERENCES utilisateur(codeUtilisateur); 
ALTER TABLE postConnaissance ADD CONSTRAINT fk_postConnaissanceTheme FOREIGN KEY (codeTheme) REFERENCES theme(codeTheme) ;
