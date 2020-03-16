drop table if exists Photo;

drop table if exists Tuteur;

drop table if exists apprenants;

/*==============================================================*/
/* Table: Photo                                                 */
/*==============================================================*/
create table Photo
(
   img_id               int not null auto_increment,
   img_nom              varchar(50),
   img_taille           varchar(25),
   img_type             varchar(25),
   img_desc             varchar(100),
   img_blob             BLOB,
   primary key (img_id)
);

/*==============================================================*/
/* Table: Tuteur                                                */
/*==============================================================*/
create table Tuteur
(
   id_tuteur            int auto_increment,
   Nom                  varchar(254),
   Prenom               varchar(254),
   Contact              int not null,
   profession           varchar(254),
   primary key (Contact)
);

/*==============================================================*/
/* Table: apprenants                                            */
/*==============================================================*/
create table apprenants
(
   id_apprenant         int auto_increment,
   Nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   ville_d_origine      varchar(254),
   formation_suivie     varchar(254),
   etablissement_precedent varchar(254),
   telephone            int not null,
   Contact              int not null,
   email                varchar(254),
   genre                varchar(254),
   projet_personnel     varchar(254),
   primary key (telephone)
);

alter table apprenants add constraint FK_Association_1 foreign key (Contact)
      references Tuteur (Contact) on delete restrict on update restrict;
