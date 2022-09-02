
<?php
$dbname='assignment';
$dbhost='localhost';
$dbpass='';
$dbuser='root';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn) {
	// echo "Connection successful";
}
else {
 echo msysqli_error($conn);
}
?>