<?php

require "conn.php";

$query = "DESCRIBE tabelku";

$q = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($q)) { 

echo "{$row['Field']} - {$row['Type']}\n"; 

}

/*
Contoh hasil seperti ini:

id - int(11)
no_telp - int(15)
alamat - longtext
nama - longtext

*/

?>
