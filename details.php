<?php
require_once("tools.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GeoIP Web Locator</title>
  <meta name="description" content="what's my ip">
  <meta name="author" content="fargas">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body class="code-snippets-visible">
 <div class="navbar-spacer"></div>
<nav class="navbar">
      <div class="container">
        <ul class="navbar-list">
          <li class="navbar-item"><a class="navbar-link" href="basic.php">Basic</a></li>
          <li class="navbar-item"><a class="navbar-link" href="details.php">Detailed</a></li>
          <li class="navbar-item"><a class="navbar-link" href="map.php">Map</a></li>
        </ul>
      </div>
</nav>
<div class="container">
	<table width='100%'>
		<tr>
			<td width='45%' align='right'>Your address:</td><td width='55%' align='left'><b><?php echo "$ip"; ?></b>
		</td>
		</tr>
		<tr>
			<td align='right'>Hostname:</td><td align='left'><b><?php echo "$hostname"; ?></b>
		</td>
		</tr>
		<tr>
			<td align='right'>Country:</td><td align='left'><img src="img/flags/<?php echo "$flag" ?>" width="18" height="12"/> <b><?php echo "$country_name"; ?> </b>
		</td>
		</tr>
		<tr>
			<td align='right'>Country Code:</td><td align='left'><b><?php echo "$country_code3"; ?></b>
		</td>
		</tr>
		<tr>
			<td align='right'>Region:</td><td align='left'><b><?php echo "$region"; ?></b>
		</td>
		</tr>
		<tr>
			<td align='right'>City:</td><td align='left'><b><?php echo "$city"; ?></b>
		</td>
		</tr>
		<tr>
			<td align='right'>Postal Code:</td><td align='left'><b><?php echo "$postal_code"; ?></b>
		</td>
		</tr>
	</table>
</div>
</body>
</html>
