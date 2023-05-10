<?php 

require_once('../../private/initialize.php');

$region_set = find_all_regions(); 
$page_title = 'Region Table';
include(SHARED_PATH . '/project-header.php'); 

?>
  <h1>Region Table</h1>
    
  <table border="1">
    <tr>
      <th>Region ID</th>
      <th>Region</th>
  	</tr>
      
    <?php while($region = mysqli_fetch_assoc($region_set)) { ?>
      <tr>
        <td><?= h($region['region_id']); ?></td>
        <td><?= h($region['region']); ?></td>
    	</tr>
    <?php } ?>
  	</table>
  <?php mysqli_free_result($region_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
