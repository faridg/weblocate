<?php

if (isset($_REQUEST['lang'])) {
	$l = $_REQUEST['lang'];
	include "lang/".$l.".php";
}
else {
	$l = "English";	
	include "lang/".$l.".php";
}
require_once("inc/geoipcity.inc");
require_once("inc/geoipregionvars.php");
require_once("inc/functions.php");

$gi = geoip_open("inc/GeoLiteCity.dat",GEOIP_STANDARD);

if (isset($_REQUEST['ip'])) {
	$ip = getAddrByHost($_REQUEST['ip'], $timeout = 3);
}
else {
	$ip = $_SERVER['REMOTE_ADDR'];	
}
$hostname = @gethostbyaddr($ip);
$record = geoip_record_by_addr($gi,"$ip");
$country_code = $record->country_code;
$country_code3 = $record->country_code3;
$country_name = $record->country_name;
$region = $record->region;
$city = $record->city;
$postal_code = $record->postal_code;
$latitude = $record->latitude;
$longitude = $record->longitude;
$metro_code = $record->metro_code;
$area_code = $record->area_code;
$flag = strtolower($country_code) . ".png";
$org = geoip_org_by_addr($giorg,"$ip");
$isp = geoip_org_by_addr($gisp,"$ip");

require_once("inc/timezone.php");
$timezone = get_time_zone($country_code,$region);
if ($country_code == "") { $country_code = $lang['country_na'];}
if ($country_code3 == "") { $country_code3 = $lang['country_na'];}
if ($country_name == "") { $country_name = $lang['country_na'];}
if ($region == "") { $region = $lang['country_na'];}
if ($city == "") { $city = $lang['country_na'];}
if ($postal_code == "") { $postal_code = $lang['country_na'];}
if ($latitude == "") { $latitude = $lang['country_na'];}
if ($longitude == "") { $longitude = $lang['country_na'];}
if ($metro_code == "") { $metro_code = $lang['country_na'];}
if ($area_code == "") { $area_code = $lang['country_na'];}
if ($timezone == "") { $timezone = $lang['country_na'];}
if ($flag == "") { $flag = $lang['country_na'];}
if ($org == "") { $org = $lang['country_na'];}
if ($isp == "") { $isp = $lang['country_na'];}

geoip_close($gisp);
geoip_close($giorg);
geoip_close($gi);
?>
