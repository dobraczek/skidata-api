<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetProduct');
$skidata->request('{
    "product": "4da0aa40-4337-11ec-98c2-005056925ed9"
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>