<?php
define("STREZNIK", "localhost" );
define("USER", "pariza57_slo12");
define("PASSWORD", "r!4Zd4rnwF4U");
define("BAZA", "pariza57_slo12run");


$povezava = mysqli_connect(STREZNIK, USER, PASSWORD, BAZA);
/*$povezava -> set_charset("utf8");*/
if (!$povezava) {
    echo "Povezava ni uspela!".mysql_connection_error();
}