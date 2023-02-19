<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetProduct');
$skidata->request('{
    "OrderDate": "2022-09-19T11:30:30.000",
    "ContactId": "79e11eb0-35b6-11ed-b6a1-00505692ebb7",
    "Name": "Martin Dobrý",
    "FirstName": "Martin",
    "LastName": "Dobrý",
    "Phone": "",
    "Email": "martin@mycrony.cz",
    "Products": {
        "ProductId": "4da0aa40-4337-11ec-98c2-005056925ed9",
        "ConsumerCategoryId": "4d111470-4337-11ec-98c2-005056925ed9",
        "DepotFlag": "false",
        "Quantity": 1,
        "ValidityStart": "2022-09-20T10:10:17.000",
        "ValidityEnd": "2022-09-20T22:59:00.000",
        "ContactId": "79e11eb0-35b6-11ed-b6a1-00505692ebb7",
        "Name": "Martin Dobrý",
        "FirstName": "Martin",
        "LastName": "Dobrý",
        "Phone": "",
        "Email": "martin@mycrony.cz",
        "Chip": "01-1614 7133 5349 3708 3660-6",
        "type": "Barcode"
    }
 }');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>