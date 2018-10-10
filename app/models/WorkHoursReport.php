class WorkHoursReport
{
  public static function fetchByProjectId($projectId) {

    $db = new PDO(DB_SERVER, DB_USER, DB_PW);
    // 2. Prepare the query
    $sql = 'SELECT * FROM Teams';
    $statement = $db->prepare($sql);
    // 3. Run the query
    $success = $statement->execute();
    // 4. Handle the results
    $arr = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
      $theTeam =  new Team($row);
      array_push($arr, $theTeam);
    }
    return $arr;
  }
}
}
