<?php 

require_once('../../private/initialize.php');

$dref_set = find_all_drefs(); 
$page_title = 'Dref Table';
include(SHARED_PATH . '/project-header.php'); 

?>
    <h1>Dref Reports Table</h1>
    
    <a href="<?= url_for('database/new.php'); ?>">Add new entry</a>
    
    <table border="1">
      <tr>
        <th>Dref Number</th>
        <th>Country</th>
        <th>Dref ID</th>
  	    <th>Dref Type</th>
        <th>Dref Date</th>
        <th>Situation</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>
      
      <?php while($dref = mysqli_fetch_assoc($dref_set)) { ?>
        <tr>
          <td><?= h($dref['dref_number']); ?></td>
          <td><?= h($dref['country']); ?></td>
          <td><?= h($dref['dref_id']); ?></td>
          <td><?= h($dref['dref_type']); ?></td>
          <td><?= h($dref['dref_date']); ?></td>
          <td><?= h($dref['situation']); ?></td>
          <td><a href="<?= url_for('database/show.php?id=' . h(u($dref['dref_number']))); ?>">View</a></td>
          <td><a href="<?= url_for('database/edit.php?id=' . h(u($dref['dref_number']))); ?>">Edit</a></td>
          <td><a href="<?= url_for('database/delete.php?id=' . h(u($dref['dref_number']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>
  <?php mysqli_free_result($dref_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
