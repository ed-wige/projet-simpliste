drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table Apprenant
(
   idApprenant          int not null auto_increment,
   idTuteur             int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   genre                varchar(254),
   dateDeNaissance      datetime,
   villeD_origine       varchar(254),
   formationSuivie      varchar(254),
   etablissementPrecedent varchar(254),
   telephone            int,
   email                varchar(254),
   photo                varchar(254),
   projetPersonnel      varchar(254),
   primary key (email)
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

alter table Apprenant add constraint FK_ foreign key (idTuteur)
      references Tuteur (idTuteur) on delete restrict on update restrict;
