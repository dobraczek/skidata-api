<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetOrders');
$skidata->request('{
    "BlockSize": 20,
    "FirstRow": 0
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>