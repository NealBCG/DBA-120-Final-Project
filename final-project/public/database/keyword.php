<?php 

require_once('../../private/initialize.php');

$keyword_set = find_all_keywords(); 
$page_title = 'Keyword Table';
include(SHARED_PATH . '/project-header.php'); 

?>
    <h1>Keywords Table</h1>
    
    <table border="1">
      <tr>
        <th>Dref Number</th>
        <th>Prediction</th>
        <th>Forecast</th>
  	    <th>Early Warning</th>
        <th>Other Terms</th>
        <th>Note/Confidence (1-3)</th>
  	  </tr>
      
      <?php while($keyword = mysqli_fetch_assoc($keyword_set)) { ?>
        <tr>
          <td><?= h($keyword['dref_number']); ?></td>
          <td><?= h($keyword['prediction']); ?></td>
          <td><?= h($keyword['forecast']); ?></td>
          <td><?= h($keyword['early_warning']); ?></td>
          <td><?= h($keyword['other_terms']); ?></td>
          <td><?= h($keyword['note_confidence']); ?></td>
    	  </tr>
      <?php } ?>
  	</table>
  <?php mysqli_free_result($keyword_set); ?>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
