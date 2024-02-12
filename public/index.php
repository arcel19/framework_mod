<?php

echo "<pre>";
print_r($_SERVER);
 echo "</pre>";

 $app = include __DIR__ . '/../src/App/boostrap.php';

 $app->run();