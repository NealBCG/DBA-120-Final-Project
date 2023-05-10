<?php 

require_once('../../private/initialize.php');

$quote_set = find_all_quotes(); 
$page_title = 'Quote Table';
include(SHARED_PATH . '/project-header.php'); 

?>
    <h1>Quote Table</h1>
    <p>Keywords are bracketed with <>.</p>
    
    <table border="1">
      <tr>
        <th>Dref Number</th>
        <th>Quote</th>
  	  </tr>
      
      <?php while($quote = mysqli_fetch_assoc($quote_set)) { ?>
        <tr>
          <td><?= h($quote['dref_number']); ?></td>
          <td><?= h($quote['quote']); ?></td>
    	  </tr>
      <?php } ?>
  	</table>
  <?php mysqli_free_result($quote_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
