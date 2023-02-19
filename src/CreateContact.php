<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('CreateContact');
$skidata->request('{
    "Name": "Martin Dobrý",
    "FirstName": "Martin",
    "LastName": "Dobrý",
    "Phone": "",
    "Email": "martin@mycrony.cz"
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>