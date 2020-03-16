drop table if exists Apprenant;

drop table if exists Tuteur;

/*==============================================================*/
/* Table: Apprenant                                             */
/*==============================================================*/
create table Apprenant
(
   id_Apprenant         int not null,
   id_Tuteur            int not null,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Genre                varchar(254),
   Date_de_naissance    datetime,
   Ville_d_origine      varchar(254),
   Formation_suivie     varchar(254),
   Etablissement_precedent varchar(254),
   Telephone            int,
   email                Varchar(254),
   Photo                Varchar,
   Projet_personnel     varchar(254),
   primary key (id_Apprenant)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   id_Tuteur            int not null,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Contact              int,
   Profession           varchar(254),
   primary key (id_Tuteur)
);

alter table Apprenant add constraint FK_Association_1 foreign key (id_Tuteur)
      references Tuteur (id_Tuteur) on delete restrict on update restrict;
