<?php
require_once('utility-functions.php');
require_once('validation_functions.php');

function find_all_regions() {
    global $db;
    $sql = "SELECT * FROM region ";
    $sql .= "ORDER BY region_id ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_all_subregions() {
  global $db;
  $sql = "SELECT * FROM subregion ";
  $sql .= "ORDER BY subregion_id ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_all_countries() {
  global $db;
  $sql = "SELECT * FROM country ";
  $sql .= "ORDER BY subregion_id ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function check_countries() {
  global $db;
  $result = mysqli_query($db, "SELECT country FROM country");
  dd($result);
  confirm_result_set($result);
  return $result;
}

function find_all_drefs() {
  global $db;
  $sql = "SELECT * FROM dref ";
  $sql .= "ORDER BY dref_number ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_all_keywords() {
  global $db;
  $sql = "SELECT * FROM keywords ";
  $sql .= "ORDER BY dref_number ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_all_quotes() {
  global $db;
  $sql = "SELECT * FROM quotes ";
  $sql .= "ORDER BY dref_number ASC";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  return $result;
}

function find_dref_by_number($id) {
    global $db;
    $sql = "SELECT r.region_id, region, s.subregion_id, subregion, c.country, d.dref_number, dref_id, dref_type, situation, prediction, forecast, early_warning, other_terms, note_confidence, quote ";
    $sql .="FROM region r, subregion s, country c, dref d ";
    $sql .="LEFT JOIN keywords k ON d.dref_number = k.dref_number ";
    $sql .="LEFT JOIN quotes q ON k.dref_number = q.dref_number ";
    $sql .="WHERE d.dref_number = $id ";
    $sql .="AND r.region_id = s.region_id ";
    $sql .="AND s.subregion_id = c.subregion_id ";
    $sql .="AND c.country = d.country ";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $dref = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $dref;
}

function insert_dref($dref) {
   global $db;

   $errors = validate_dref($dref);
   if(!empty($errors)) {
     return $errors;
   }

    $sql = "INSERT INTO dref ";
    $sql .= "(country, dref_id, dref_type, dref_date, situation) ";
    $sql .= "VALUES(";
    $sql .= "'" . $dref['country'] . "',";
    $sql .= "'" . $dref['dref_id'] . "',";
    $sql .= "'" . $dref['dref_type'] . "',";
    $sql .= "'" . $dref['dref_date'] . "',";
    $sql .= "'" . $dref['situation'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);

    if($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}

function update_dref($dref) {
    global $db;

    $errors = validate_dref($dref);
    if(!empty($errors)) {
      return $errors;
    }

    $sql = "UPDATE dref SET ";
    $sql .= "country='" .  $dref['country'] . "', ";
    $sql .= "dref_id='" .  $dref['dref_id'] . "', ";
    $sql .= "dref_type='" .  $dref['dref_type'] . "', ";
    $sql .= "dref_date='" .  $dref['dref_date'] . "', ";
    $sql .= "situation='" .  $dref['situation'] . "' ";
    $sql .= "WHERE dref_number='" . $dref['dref_number'] . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);
    if($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}

function delete_dref($id) {
    global $db;
    $sql = "DELETE FROM dref ";
    $sql .= "WHERE dref_number = '" . $id . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    if($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }
}

function validate_dref($dref) {
  $errors = [];

  if(is_blank($dref['country']))
    $errors[] = "Country field cannot be blank.";
 // elseif(!array_key_exists($dref['country'], check_countries()))
 //     $errors[] = "Must pick a valid country.";

  if(is_blank($dref['dref_id'])) 
    $errors[] = "Dref ID field cannot be blank.";

  if(is_blank($dref['dref_date'])) 
    $errors[] = "Dref date field cannot be blank.";
  
  if(is_blank($dref['situation'])) 
    $errors[] = "Situation field cannot be blank.";

  return $errors;
}
