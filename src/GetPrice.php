<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetPrice');
$skidata->request('{
    "ProductId": "4da0aa40-4337-11ec-98c2-005056925ed9",
    "ConsumerCategoryId": "4d111470-4337-11ec-98c2-005056925ed9",
    "ValidFrom": "2022-10-10"
}');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>