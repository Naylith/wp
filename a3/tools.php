function preShow($arr) {
echo "<pre>";
print_r($arr);
echo "</pre>";
}
preShow($_POST);
preShow($_SESSION);

function printMyCode() {
$lines = file($_SERVER['SCRIPT_FILENAME']);
echo "<pre class='mycode'>\n";
foreach ($lines as $lineNo => $lineOfCode)
printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
echo "</pre>";
}
printMyCode();

function php2js($arr, $arrName) {
$lineEnd="";
echo "<script>\n";
echo " var $arrName = {\n";
foreach ($arr as $key => $value) {
echo "$lineEnd $key : $value";
$lineEnd = ",\n";
}
echo " \n};\n";
echo "</script>\n\n";
}
$pricesArrayPHP = array ( ... );
php2js($pricesArrayPHP, 'pricesArrayJS');

function styleCurrentNavLink( $css ) {
$here = $_SERVER['SCRIPT_NAME'];
$bits = explode('/',$here);
$filename = $bits[count($bits)-1];
echo "<style>nav a[href$='$filename'] { $css }</style>";
}
styleCurrentNavLink('background-color: rgba(255,255,255,0.6);');