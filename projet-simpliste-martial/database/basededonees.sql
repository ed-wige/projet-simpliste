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
   primary key (idApprenant)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   idTuteur             int not null  auto_increment,
   nom                  varchar(254),
   prenom               varchar(254),
   profession           varchar(254),
   contact              int,
   primary key (idTuteur)
);

alter table Apprenant add constraint FK_association1 foreign key (idTuteur)
      references Tuteur (idTuteur) on delete restrict on update restrict;
