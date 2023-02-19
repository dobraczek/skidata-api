<?php

require 'Skidata.class.php';

$skidata = new SkidataAPI('GetVersion');
$data = $skidata->SkidataRead();

# zobrazeni vysledku
echo $skidata->view($data);


?>