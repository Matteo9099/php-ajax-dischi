<?php
require __DIR__ . '/../db/discs.php';

header('Content-type: application/json');
echo json_encode($database);