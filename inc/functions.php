<?php

function langlist() {
foreach (glob("lang/*.php") as $filename) {
$lng = explode(".php", $filename);
list($name, $ext) = $lng;
$lang = explode("/", $name);
list($dir, $lang) = $lang;
    print "<option value=\"". $lang ."\">" . $lang . "</option>\n";
}
}

function getAddrByHost($ip, $timeout = 3) {
   $query = `nslookup -timeout=$timeout -retry=1 $ip`;
   if(preg_match('/\nAddress: (.*)\n/', $query, $matches))
      return trim($matches[1]);
   return $ip;
}

?>