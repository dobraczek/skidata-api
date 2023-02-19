<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetValidityCategories');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);

?>