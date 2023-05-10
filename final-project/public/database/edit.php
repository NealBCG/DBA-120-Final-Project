<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/project-header.php'); 
$pageTitle = 'Edit Dref';

$id = $_GET['id'];
$dref = find_dref_by_number($id);

if(is_post_request()) {
  $dref = [];
  $dref['country'] = $_POST['country'] ?? '';
  $dref['dref_id'] = $_POST['dref_id'] ?? '';
  $dref['dref_type'] = $_POST['dref_type'] ?? '';
  $dref['dref_date'] = $_POST['dref_date'] ?? '';
  $dref['situation'] = $_POST['situation'] ?? '';

  $result = update_dref($dref);
  if($result === true) {
  redirect_to(url_for('database/show.php?id=' . $id));
  } else 
    $errors = $result;
}
else 
  $dref = find_dref_by_number($id);

$dref_set = find_all_drefs();
$dref_count = mysqli_num_rows($dref_set);
mysqli_free_result($dref_set);
?>
<h1>Edit Dref</h1>

<?php echo display_errors($errors); ?>
<form action="<?= url_for('database/edit.php?id=' . $id); ?>" method="post">
  <label for="country">
    <p>Country:<br> <input type="text" name="country" value=""></p>
  </label>
  <label for="dref_id">
    <p>Dref ID:<br> <input type="text" name="dref_id" value=""></p>
  </label>
  <label for="dref_type">
    <select name="dref_type" id="dref_type">
      <option value="Operation">Operation</option>
      <option value="Update">Update</option>
      <option value="Final Report">Final Report</option>
    </select>
  </label>
  <label for="dref_date">
    <p>Dref Date:<br> <input type="date" name="dref_date" value=""></p>
  </label>
  <label for="situation">
    <p>Situation:<br> <input type="text" name="situation" value=""></p>
  </label>
  <label for="submit">
    <p><input type="submit" value="Edit Dref"></p>
  </label>
</form>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
