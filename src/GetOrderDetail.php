<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetOrderDetail');
$skidata->request('{
    "OrderId": "7ed68a30-35b7-11ed-a29a-0050569254df"
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>