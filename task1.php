<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Суперглобальні змінні php</title>
</head>
<body>
<h1>Суперглобальні змінні PHP</h1>
	<table border="1">
		<tr>
			<th>Позначення змінної</th>
			<th>Характеристика</th>
			<th>Отримане значення</th>
		</tr>
        <tr>
			<td>$GLOBALS</td>
			<td>An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.</td>
			<td><?php print_r($GLOBALS); ?></td>
		</tr>
		<tr>
			<td>$_SERVER</td>
			<td>$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server, therefore there is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.</td>
			<td><?php print_r($_SERVER); ?></td>
		</tr>
		<tr>
			<td>$_GET</td>
			<td>An associative array of variables passed to the current script via the URL parameters (aka. query string). Note that the array is not only populated for GET requests, but rather for all requests with a query string.</td>
			<td><?php print_r($_GET); ?></td>
		</tr>
		<tr>
			<td>$_POST</td>
			<td>An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.</td>
			<td><?php print_r($_POST); ?></td>
		</tr>
		<tr>
			<td>$_REQUEST</td>
			<td>An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.</td>
			<td><?php print_r($_REQUEST); ?></td>
		</tr>
		<tr>
			<td>$_COOKIE</td>
			<td>An associative array of variables passed to the current script via HTTP Cookies.</td>
			<td><?php print_r($_COOKIE); ?></td>
		</tr>
		<tr>
			<td>$_SESSION</td>
			<td>An associative array containing session variables available to the current script. See the Session functions documentation for more information on how this is used.</td>
			<td><?php print_r($_SESSION); ?></td>
		</tr>
        <tr>
			<td>$_ENV</td>
			<td>An associative array of variables passed to the current script via the environment method.</td>
			<td><?php print_r($_ENV); ?></td>
		</tr>
        <tr>
			<td>$_FILES</td>
			<td>An associative array of items uploaded to the current script via the HTTP POST method. The structure of this array is outlined in the POST method uploads section.</td>
			<td><?php print_r($_FILES); ?></td>
		</tr>
	</table>
</body>
</html>