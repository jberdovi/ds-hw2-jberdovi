<?php

require '../../app/common.php';
$taskId = intval($_GET['projectId'] ?? 0);

if ($projectId < 1) {
  throw new Exception('Invalid Project ID in URL');
}

// 1. Go to the database and get all work associated with the $taskId
$workArr = WorkHoursReport::WorkHoursReport($projectId);

// 2. Convert to JSON
$json = json_encode($workArr, JSON_PRETTY_PRINT);

// 3. Print
header('Content-Type: application/json');
echo $json;
