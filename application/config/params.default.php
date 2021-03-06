<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * Global parameter file for codeigniter.
 * This is used to export and import into orther locations / servers
 * so the application can work as a stand alone app.
 * 
 * All global changes can be made here
 * 
 * !! IMPORTANT !!
 * Always use the prefix "param_" for any parameter variable.
 * This way it never interfeer with the preserved codeigniter keys.
 * 
 *		example: $config['param_hello'] = 'Hello world';
 * 
 * To use a parameter in the application, simply call the function param('param_name').
 *
 *		example: param('param_hello');
 */

// $config['param_'] = '';

$config['param_pagetitle']	= 'Siebel';

// Google Analytics UID
$config['param_google_analytics'] = 'UA-00000000-1';

// Mail host
$config['param_mailhost'] = 'noreply@example.com'; // This is the general system mailaddress.

// Company credits
$config['param_company_name'] = 'Jonh Doe Company';
$config['param_company_phone'] = '8001231234';
$config['param_company_fax'] = '8009879876';
$config['param_company_address'] = '123 Street Dr., Suite 102';
$config['param_company_location'] = 'Manhaton, NY, 12345';
$config['param_company_country'] = 'USA';

// Default database parameters 
$config['param_default_database_host'] = 'localhost';
$config['param_default_database_username'] = 'root';
$config['param_default_database_password'] = '';
$config['param_default_database_database'] = 'siebel';
$config['param_default_database_dbdriver'] = 'mysql';
$config['param_default_database_dbprefix'] = '';

// Contact database parameters 
$config['param_contact_database_host'] = 'localhost';
$config['param_contact_database_username'] = 'root';
$config['param_contact_database_password'] = '';
$config['param_contact_database_database'] = 'siebel';
$config['param_contact_database_dbdriver'] = 'mysql';
$config['param_contact_database_dbprefix'] = '';

// ASW database parameters 
$config['param_asw_database_host'] = 'localhost';
$config['param_asw_database_username'] = 'root';
$config['param_asw_database_password'] = '';
$config['param_asw_database_database'] = 'siebel';
$config['param_asw_database_dbdriver'] = 'mysql';
$config['param_asw_database_dbprefix'] = '';

$config['param_asw_database_table_customer'] = 'customers';
	$config['param_asw_database_column_customername'] = 'customername';
	$config['param_asw_database_column_customerinternalname'] = 'customerinternalname';
	$config['param_asw_database_column_customernumber'] = 'customernumber';
	$config['param_asw_database_column_customernumber_prefix'] = 'mb';
	$config['param_asw_database_column_customerlang'] = 'customerlang';
	$config['param_asw_database_column_customer_adress1'] = 'adress1';
	$config['param_asw_database_column_customer_adress2'] = 'adress2';
	$config['param_asw_database_column_customer_adress3'] = 'adress3';
	$config['param_asw_database_column_customer_postalcode'] = 'postalcode';
	$config['param_asw_database_column_customer_city'] = 'city';
	$config['param_asw_database_column_customer_state'] = 'state';
	$config['param_asw_database_column_customer_state_active'] = 'D';

$config['param_asw_database_table_deliveryaddress'] = 'deliveryaddresses';
	$config['param_asw_database_column_deliveryaddress_cuno'] = 'customernumber';
	$config['param_asw_database_column_deliveryaddress_id'] = 'id';
	$config['param_asw_database_column_deliveryaddress_name'] = 'name';
	$config['param_asw_database_column_deliveryaddress_ad1'] = 'adress1';
	$config['param_asw_database_column_deliveryaddress_ad2'] = 'adress2';
	$config['param_asw_database_column_deliveryaddress_ad3'] = 'adress3';
	$config['param_asw_database_column_deliveryaddress_pc'] = 'postalcode';
	$config['param_asw_database_column_deliveryaddress_city'] = 'city';
	$config['param_asw_database_column_deliveryaddress_country'] = 'country';
	
$config['param_asw_database_table_salesorderheader'] = '';
	$config['param_asw_database_column_soh_salesordernumber'] = '';
	$config['param_asw_database_column_soh_salesordernumbercostumer'] = '';
	$config['param_asw_database_column_soh_customernumber'] = '';


$config['param_asw_database_table_manufacturing'] = '';
	$config['param_asw_database_column_manuf_product'] = '';
	$config['param_asw_database_column_manuf_number'] = '';
	$config['param_asw_database_column_manuf_salesorder'] = '';
	$config['param_asw_database_column_manuf_salesorderline'] = '';

$config['param_asw_database_table_extrusion'] = '';
	$config['param_asw_database_column_ext_manuforder'] = '';
	$config['param_asw_database_column_ext_sample'] = '';
	$config['param_asw_database_column_ext_dienumber'] = '';
	$config['param_asw_database_column_ext_packnumber'] = '';
	$config['param_asw_database_column_ext_gietnummer'] = '';
	$config['param_asw_database_column_ext_station'] = '';
	$config['param_asw_ext_finalstation'] = '';
	$config['param_asw_database_column_ext_date'] = '';
	
$config['param_asw_database_table_die'] = '';
	$config['param_asw_database_column_die_number'] = '';
	$config['param_asw_database_column_die_alloy'] = '';
	
$config['param_asw_database_table_manufmaterial'] = '';
	$config['param_asw_database_column_mfmat_alloy'] = '';
	$config['param_asw_database_column_mfmat_ordernumber'] = '';
	
$config['param_asw_database_table_product'] = '';
	$config['param_asw_database_column_product_ourref'] = '';
	$config['param_asw_database_column_product_custref'] = '';
	$config['param_asw_database_column_product_custnumber'] = '';
	
$config['param_asw_database_table_salesorderline'] = '';
	$config['param_asw_database_column_soline_order'] = '';
	$config['param_asw_database_column_soline_line'] = '';
	$config['param_asw_database_column_soline_transportnumber'] = '';
	$config['param_asw_database_column_soline_transportdate'] = '';
	$config['param_asw_database_column_soline_unit'] = '';
	$config['param_asw_database_column_soline_quantity'] = '';
	
$config['param_asw_database_table_transporttime'] = '';
	$config['param_asw_database_column_trt_salesorder'] = '';
	$config['param_asw_database_column_trt_salesorderline'] = '';
	$config['param_asw_database_column_trt_date'] = '';

/* Contact database */
$config['param_asw_database_table_contact'] = 'contacts';
	$config['param_asw_database_column_contact_id'] = 'id';
	$config['param_asw_database_column_contact_customernumber'] = 'customernumber';
	$config['param_asw_database_column_contact_name'] = 'name';
	$config['param_asw_database_column_contact_email'] = 'email';
	$config['param_asw_database_column_contact_fax'] = 'fax';
	$config['param_asw_database_column_contact_phone'] = 'phone';
	$config['param_asw_database_column_contact_customerid'] = 'customerid';
	$config['param_asw_database_column_contact_general'] = 'general';
	$config['param_asw_database_column_contact_billing'] = 'billing';
	$config['param_asw_database_column_contact_order'] = 'order';
	$config['param_asw_database_column_contact_purchase'] = 'purchase';
	$config['param_asw_database_column_contact_transport'] = 'transport';
	$config['param_asw_database_column_contact_packing'] = 'packing';
	$config['param_asw_database_column_contact_quality'] = 'quality';
	$config['param_asw_database_column_contact_state'] = 'state';
	
	
	
	
$config['param_asw_database_table_'] = '';
	$config['param_asw_database_column_'] = '';
	/*
	 * 
	 */

	
	