<?php
for ($num = 1; $num <= 1000; $num += 1) { 
$myfile = fopen("/storage/ssd2/772/21379772/public_html/Otherwebsites/$num.html", "w") or die("Unable to open file!");
$txt="<!DOCTYPE html>";

fwrite($myfile, $txt);

$txt="<html lang=\"en\">";

fwrite($myfile, $txt);

$txt="<head>";

fwrite($myfile, $txt);

$txt="    <meta charset=\"UTF-8\">";

fwrite($myfile, $txt);

$txt="    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";

fwrite($myfile, $txt);

$txt="    <title>My HTML Template</title>";

fwrite($myfile, $txt);

$txt="</head>";

fwrite($myfile, $txt);

$txt="<body>";

fwrite($myfile, $txt);

$txt="    <h1>Unclaimed HTML</h1>";

fwrite($myfile, $txt);

$txt="    <p>contact me at hoangquocanhmon@icloud.com at claim this html</p>";

fwrite($myfile, $txt);

$txt="</body>";

fwrite($myfile, $txt);

$txt="</html>";
fclose($myfile);
}
?>