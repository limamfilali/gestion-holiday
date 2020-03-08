/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  23/04/2019 01:39:06                      */
/*==============================================================*/



/*==============================================================*/
/* Table : ADMIN                                                */
/*==============================================================*/
create table ADMIN 
(
   ID_ADMIN             integer                        not null,
   LOGIN              varchar(100)                   null,
   MOT_PASSE            varchar(100)                   null,
   DATE_MODIFICATION    timestamp                      null,
   constraint PK_ADMIN primary key (ID_ADMIN)
);

/*==============================================================*/
/* Table : AGENT                                                */
/*==============================================================*/
create table AGENT 
(
   ID                   integer                        not null,
   ID_ADMIN             integer                        not null,
   ID_DEP               integer                        not null,
   NOM                  varchar(150)                   null,
   PRENOM               varchar(150)                   null,
   ADRESSE              varchar(255)                   null,
   TELEPHONE            numeric(10)                    null,
   GARDE                varchar(100)                   null,
   SALAIRE              integer                          null,
   CIN                  varchar(10)                    null,
   CNSS                 varchar(10)                    null,
   DATE_EMBAUCHE        date                           null,
   DATE_NAISSANCE       date                           null,
   SEX                  varchar(100)                   null,
   RELEQUAT             integer                        null,
   constraint PK_AGENT primary key (ID)
);

/*==============================================================*/
/* Table : CONGE                                                */
/*==============================================================*/
create table CONGE 
(
   ID_CONGE             integer                        not null,
   ID                   integer                        not null,
   TYPE                 varchar(110)                   not null,
   DATE_DEPART          date                           not null,
   DATE_RETEUR          date                           not null,
   DESCRIPTION           varchar(255)                   not null,
   DATE_AFFICHAGE       timestamp                      not null,
   ADMIN_REMARQUE        varchar(255)                  not null,
   STATUS               integer                        not null,
   constraint PK_CONGE primary key (ID_CONGE)
);

/*==============================================================*/
/* Table : DEPARTEMENT                                          */
/*==============================================================*/
create table DEPARTEMENT 
(
   ID_DEP               integer                        not null,
   NOM_DEP              varchar(150)                  not  null,
   ABRIVIATION          varchar(100)                   not null,
   CODE_DEP             varchar(50)                   not null,
   DATE_CREATION        timestamp                     not null,
   constraint PK_DEPARTEMENT primary key (ID_DEP)
);

/*==============================================================*/
/* Table : HISTORIQUE                                           */
/*==============================================================*/
create table HISTORIQUE 
(
   ID_                  integer                        not null,
   ANCIEN_VAL           varchar(150)                  not null,
   NOUVEL_VAL           varchar(150)                  not null,
   NOM_TABLE            varchar(150)                 not  null,
   DATE_ACTION          integer                       not null,
   ID_UTILISATEUR       integer                       not null,
   constraint PK_HISTORIQUE primary key (ID_)
);

/*==============================================================*/
/* Table : JOUR_FERIE                                           */
/*==============================================================*/
create table JOUR_FERIE 
(
   ID_ANNEE             integer                       not null,
   DATE_DEBUT           date                         not  null,
   DATE_FIN             date                         not  null,
   DESCRIPTION          varchar(255)                 not  null,
   ID_JOUR              integer                        not null,
   constraint PK_JOUR_FERIE primary key (ID_JOUR)
);

/*==============================================================*/
/* Table : PARAMETRAGE                                          */
/*==============================================================*/
create table PARAMETRAGE 
(
   NOM_SOCIETE          varchar(150)                  not null,
   TELE                 char(50)                      not null,
   ADRESSE              varchar(255)                 not  null,
   EMAIL                varchar(150)                 not  null,
   LOGO                 char(150)                    not  null,
   ID_PARA              integer                        not null,
   constraint PK_PARAMETRAGE primary key (ID_PARA)
);

/*==============================================================*/
/* Table : TYPE_CONGE                                           */
/*==============================================================*/
create table TYPE_CONGE 
(
   ID_TYPE              integer                        not null,
   TYPE_CONGE           varchar(200)                   not null,
   DESCRIPTION          varchar (200)                  not null,
   DATE_CREATION        timestamp                      not null,
   constraint PK_TYPE_CONGE primary key (ID_TYPE)
);

alter table ABSENCE
   add constraint FK_ABSENCE_AVOIR_AGENT foreign key (ID)
      references AGENT (ID)
      on update restrict
      on delete restrict;

alter table AGENT
   add constraint FK_AGENT_GERE_ADMIN foreign key (ID_ADMIN)
      references ADMIN (ID_ADMIN)
      on update restrict
      on delete restrict;

alter table AGENT
   add constraint FK_AGENT_TRAVAILLE_DEPARTEM foreign key (ID_DEP)
      references DEPARTEMENT (ID_DEP)
      on update restrict
      on delete restrict;

alter table CONGE
   add constraint FK_CONGE_ETABLIR_AGENT foreign key (ID)
      references AGENT (ID)
      on update restrict
      on delete restrict;

