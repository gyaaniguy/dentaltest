<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/mark.php';


$teethMarker = new TeethMarker(file_get_contents(__DIR__.'/htmls/teethPage.html'));

$teethMarker->markTeeth(['32','31','M','11','12','23','17']);

$htmlOutStr = $teethMarker->getHtml();

file_put_contents(__DIR__.'/htmls/example-teethPageOut.html',$htmlOutStr);