CREATE TABLE user(
  id_u smallint unsigned not null auto_increment,
  nom varchar(50),
  prenom varchar(50),
  email varchar(255),
  mdp varchar(255),
  lvl int,
  id_chef int,
  primary key(id_u)
);

CREATE TABLE fiche(
  id_f smallint unsigned not null auto_increment,
  id_c smallint unsigned,
  id_p smallint unsigned,
  primary key(id_f),
  foreign key(id_c) references client(id_c),
  foreign key(id_p) references projet(id_p)
);

CREATE TABLE client(
  id_c smallint unsigned not null auto_increment,
  prospect boolean,
  nom_c varchar(255),
  fonction varchar(255),
  adresse varchar(255),
  cp varchar(10),
  ville varchar(255),
  tel varchar(15),
  fax varchar(15),
  mail_c varchar(255),
  secteur_activite(255),
  nb_site int,
  nb_salarie int,
  primary key(id_c)
);

CREATE TABLE projet(
  id_p smallint unsigned not null auto_increment,
  prescripteur varchar(255),
  decideur varchar(255),
  signataire varchar(255),
  date_projet date,
  primary key(id_p)
);

CREATE TABLE bureautique(
  id_b smallint unsigned not null auto_increment,
  fournisseur varchar(255),
  leaser varchar(255),
  date_deb date,
  loyer float,
  prelevement boolean,
  duree_contrat int,
  materiel text,
  noir int,
  couleur int,
  cout_noir float,
  cout_couleur float,
  volume_noir int,
  volume_couleur int,
  supp_noir int,
  supp_couleur,
  amelioration text,
  orientation text,
  primary key(id_b),
  foreign key(id_b) references projet(id_p)
);

CREATE TABLE informatique(
  id_i smallint unsigned not null auto_increment,
  nom_resp varchar(255),
  materiel_actuel text,
  materiel_propose text,
  poste_travail text,
  pc_portable text,
  serveur text,
  nas text,
  reseau text,
  sauvegarde text,
  logiciel_actuel text,
  logiciel_propose text,
  note_i text,
  travaux text,
  intervention text,
  maintenance text,
  dispositif text,
  panne_serveur text,
  doc_vital text,
  cout_contrat text,
  echeance varchar(255),
  primary key(id_i),
  foreign key(id_i) references projet(id_p)
);

CREATE TABLE solution(
  id_s smallint unsigned not null auto_increment,
  doc_classe text,
  doc_archive text,
  doc_ordi text,
  collab_absent text,
  procedure_valid text,
  vol_impression text,
  refacturer text,
  doc_conf text,
  doc_compta text,
  vol_couleur_imp text,
  doc_papier text,
  doc_app text,
  scanner text,
  fonction_scanner text,
  primary key(id_s),
  foreign key(id_s) references projet(id_p)
);

CREATE TABLE telephonie(
  id_t smallint unsigned not null auto_increment,
  fournisseur_t varchar(255),
  leaser_t varchar(255),
  date_deb_t date,
  loyer_t float,
  prelevement_t boolean,
  duree_contrat int,
  materiel_t varchar(255),
  primary key(id_t),
  foreign key(id_t) references projet(id_p)
);