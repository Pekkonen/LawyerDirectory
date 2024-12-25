#
# Table structure for table 'tx_lawyerdirectory_domain_model_lawyer'
#
CREATE TABLE tx_lawyerdirectory_domain_model_lawyer (

	name varchar(255) DEFAULT '' NOT NULL,
	firstname varchar(255) DEFAULT '' NOT NULL,
	picture int(11) unsigned NOT NULL default '0',
	lawyer_profile text,
	g_y_l_top_lawyer smallint(5) unsigned DEFAULT '0' NOT NULL,
	g_y_l_top_lawyer_label smallint(5) unsigned DEFAULT '0' NOT NULL,
	bilanz_anwaltsrating smallint(5) unsigned DEFAULT '0' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	customerrating double(11,2) DEFAULT '0.00' NOT NULL,
	openforenquiries smallint(5) unsigned DEFAULT '0' NOT NULL,
	postalcode varchar(255) DEFAULT '' NOT NULL,
	city varchar(255) DEFAULT '' NOT NULL,
	calltoaction varchar(255) DEFAULT '' NOT NULL,
	shortprofile text,
	categories int(11) DEFAULT '0' NOT NULL,
	yearof_admission int(11) DEFAULT '0' NOT NULL,
	yearof_birth int(11) DEFAULT '0' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	specialistattorney int(11) unsigned DEFAULT '0' NOT NULL,
	specialistareas int(11) unsigned DEFAULT '0' NOT NULL,
	languages int(11) unsigned DEFAULT '0' NOT NULL,
	training int(11) unsigned DEFAULT '0' NOT NULL,
	workexperience int(11) unsigned DEFAULT '0' NOT NULL,
	membership int(11) unsigned DEFAULT '0',
	canton int(11) unsigned DEFAULT '0',
	gender int(11) unsigned DEFAULT '0' NOT NULL,
	certification int(11) unsigned DEFAULT '0',
	admissiontothebar int(11) unsigned DEFAULT '0',
	testimonial int(11) unsigned DEFAULT '0' NOT NULL,
    slug varchar(2048)
);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_title'
#
CREATE TABLE tx_lawyerdirectory_domain_model_title (

	title varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_specialistattorney'
#
CREATE TABLE tx_lawyerdirectory_domain_model_specialistattorney (

	specialistattorney varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_balancesheetlawyerrankinglogo'
#
CREATE TABLE tx_lawyerdirectory_domain_model_balancesheetlawyerrankinglogo (

	balance_sheet_lawyer_ranking_logo varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_specialistareas'
#
CREATE TABLE tx_lawyerdirectory_domain_model_specialistareas (

	specialistareas varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_languages'
#
CREATE TABLE tx_lawyerdirectory_domain_model_languages (

	language varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_training'
#
CREATE TABLE tx_lawyerdirectory_domain_model_training (

	lawyer int(11) unsigned DEFAULT '0' NOT NULL,

	startyear int(11) DEFAULT '0' NOT NULL,
	endyear int(11) DEFAULT '0' NOT NULL,
	text text

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_workexperience'
#
CREATE TABLE tx_lawyerdirectory_domain_model_workexperience (

	lawyer int(11) unsigned DEFAULT '0' NOT NULL,

	startyear int(11) DEFAULT '0' NOT NULL,
	endyear int(11) DEFAULT '0' NOT NULL,
	text text

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_membership'
#
CREATE TABLE tx_lawyerdirectory_domain_model_membership (

	name varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_canton'
#
CREATE TABLE tx_lawyerdirectory_domain_model_canton (

	name varchar(255) DEFAULT '' NOT NULL

);
#
# Table structure for table 'tx_lawyerdirectory_domain_model_certification'
#
CREATE TABLE tx_lawyerdirectory_domain_model_certification (
	gender int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) DEFAULT '' NOT NULL

);



#
# Table structure for table 'tx_lawyerdirectory_domain_model_category'
#
CREATE TABLE tx_lawyerdirectory_domain_model_category (

	name varchar(255) DEFAULT '' NOT NULL

);


#
# Table structure for table 'tx_lawyerdirectory_domain_model_admissiontothebar'
#
CREATE TABLE tx_lawyerdirectory_domain_model_admissiontothebar (

	name varchar(255) DEFAULT '' NOT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_domain_model_testimonial'
#
CREATE TABLE tx_lawyerdirectory_domain_model_testimonial (

	lawyer int(11) unsigned DEFAULT '0' NOT NULL,

	highlight smallint(5) unsigned DEFAULT '0' NOT NULL,
	rating double(11,2) DEFAULT '0.00' NOT NULL,
	text text,
	name varchar(255) DEFAULT '' NOT NULL,
	date date DEFAULT NULL

);

#
# Table structure for table 'tx_lawyerdirectory_lawyer_specialistattorney_mm'
#
CREATE TABLE tx_lawyerdirectory_lawyer_specialistattorney_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_lawyerdirectory_lawyer_specialistareas_mm'
#
CREATE TABLE tx_lawyerdirectory_lawyer_specialistareas_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_lawyerdirectory_lawyer_languages_mm'
#
CREATE TABLE tx_lawyerdirectory_lawyer_languages_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Extend table structure of table 'sys_category'
#
CREATE TABLE sys_category (
	slug varchar(2048)
);
