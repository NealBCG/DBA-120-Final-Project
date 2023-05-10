<?php 

require_once('../../private/initialize.php');

$country_set = find_all_countries(); 
$page_title = 'Country Table';
include(SHARED_PATH . '/project-header.php'); 

?>
  <h1>Country Table</h1>
    
  <table border="1">
    <tr>
      <th>sSubregion ID</th>
      <th>Country</th>
  	</tr>
      
    <?php while($country = mysqli_fetch_assoc($country_set)) { ?>
      <tr>
        <td><?= h($country['subregion_id']); ?></td>
        <td><?= h($country['country']); ?></td>
    	</tr>
    <?php } ?>
  	</table>
  <?php mysqli_free_result($country_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
