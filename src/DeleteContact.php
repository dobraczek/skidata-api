<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('CreateContact');
$skidata->request('{
    "ContactId": "6b993ac0-0fee-11ec-885a-00505692ebb7"
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>