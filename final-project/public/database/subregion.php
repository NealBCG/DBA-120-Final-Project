<?php 

require_once('../../private/initialize.php');

$subregion_set = find_all_subregions(); 
$page_title = 'Subregion Table';
include(SHARED_PATH . '/project-header.php'); 

?>
  <h1>Subregion Table</h1>
    
  <table border="1">
    <tr>
      <th>Region ID</th>
      <th>Subregion ID</th>
      <th>Subregion</th>
  	</tr>
      
    <?php while($subregion = mysqli_fetch_assoc($subregion_set)) { ?>
      <tr>
        <td><?= h($subregion['region_id']); ?></td>
        <td><?= h($subregion['subregion_id']); ?></td>
        <td><?= h($subregion['subregion']); ?></td>
    	</tr>
    <?php } ?>
  	</table>
  <?php mysqli_free_result($subregion_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
