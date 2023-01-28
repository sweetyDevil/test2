<?php

$data = [ 'number' => rand()];

header('Content-type: application/json');
echo json_encode( $data );
