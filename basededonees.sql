drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table Apprenant
(
       idApprenant            int auto_increment,
   contact          int not null ,
   nom                  varchar(254),
   prenom               varchar(254),
   genre                varchar(254),
   dateDeNaissance      date,
   villeD_origine       varchar(254),
   formationSuivie      varchar(254),
   etablissementPrecedent varchar(254),
   telephone            int,
   email                varchar(254),
   photo                varchar(254),
   projetPersonnel      varchar(254),
   primary key (idApprenant)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   nom                  varchar(254),
   prenom               varchar(254),
   profession           varchar(254),
   contact              int,
   primary key (contact)
);

alter table Apprenant add constraint FK_association1 foreign key (contact)
      references Tuteur (contact) on delete restrict on update restrict;



-- DELETE tuteur FROM tuteur
-- LEFT OUTER JOIN (
-- SELECT MIN(idTuteur) as id, nom, prenom, profession, contact
-- FROM tuteur
-- GROUP BY nom, prenom, profession, contact
-- ) as t1
-- ON tuteur.idTuteur = t1.id
-- WHERE t1.id IS NULL