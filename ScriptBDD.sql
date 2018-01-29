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
  date_contact date,
  date_rdv date,
  prise_rdv varchar(255),
  id_u smallint unsigned,
  primary key(id_f),
  foreign key(id_u) references user(id_u)
);

CREATE TABLE client(
  id_c smallint unsigned not null auto_increment,
  raison text,
  prospect boolean,
  nom_c varchar(255),
  fonction varchar(255),
  adresse varchar(255),
  cp varchar(10),
  ville varchar(255),
  tel varchar(15),
  fax varchar(15),
  mail_c varchar(255),
  secteur_activite varchar(255),
  nb_site int,
  nb_salarie int,
  prescripteur varchar(255),
  decideur varchar(255),
  signataire varchar(255),
  id_f smallint unsigned,
  interet int,
  primary key(id_c),
  foreign key(id_f) references fiche(id_f)
);

CREATE TABLE projet(
  id_p smallint unsigned not null auto_increment,
  date_projet date,
  id_c smallint unsigned,
  primary key(id_p),
  foreign key(id_c) references client(id_c)
);

CREATE TABLE bureautique(
  id_b smallint unsigned not null auto_increment,
  fournisseur varchar(255),
  leaser varchar(255),
  date_deb date,
  achat boolean,
  prix_b float,
  prelevement boolean,
  duree_contrat text,
  materiel text,
  noir int,
  couleur int,
  cout_noir float,
  cout_couleur float,
  volume_noir int,
  volume_couleur int,
  supp_noir int,
  supp_couleur int,
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
  cout_contrat float,
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
  proc_valid text,
  vol_impression text,
  refacturer text,
  doc_conf text,
  doc_compta text,
  vol_coul_imp text,
  doc_papier text,
  doc_app text,
  scanner text,
  fonct_scanner text,
  primary key(id_s),
  foreign key(id_s) references projet(id_p)
);

CREATE TABLE telephonie(
  id_t smallint unsigned not null auto_increment,
  fournisseur_t varchar(255),
  leaser_t varchar(255),
  date_deb_t date,
  achat_t boolean,
  prix_t float,
  prelevement_t boolean,
  duree_contrat_t text,
  materiel_t text,
  num_ligne varchar(255),
  nb_poste int,
  nb_rj45 int,
  primary key(id_t),
  foreign key(id_t) references projet(id_p)
);

CREATE TABLE facture(
  id_fact smallint unsigned not null auto_increment,
  description text,
  id_t smallint unsigned,
  primary key(id_fact),
  foreign key(id_t) references telephonie(id_t)
);
