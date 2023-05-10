<?php require_once('../../private/initialize.php'); 

$page_title = 'Dref Details';
include(SHARED_PATH . '/project-header.php'); 
if (!empty($_GET['id']))
  $id = $_GET['id'];
else
  $id = 1;
$dref = find_dref_by_number($id);
?>

<h2>Dref Details</h2>
<p><strong>Region ID:</strong><?= h($dref['region_id']); ?></p>
<p><strong>Region:</strong><?= h($dref['region']); ?></p>
<p><strong>Subregion ID:</strong><?= h($dref['subregion_id']); ?></p>
<p><strong>Subregion:</strong><?= h($dref['subregion']); ?></p>
<p><strong>country:</strong><?= h($dref['country']); ?></p>
<p><strong>Dref Number:</strong><?= h($dref['dref_number']); ?></p>
<p><strong>Dref ID:</strong><?= h($dref['dref_id']); ?></p>
<p><strong>Dref Type:</strong><br><?= h($dref['dref_type']); ?> </p>
<p><strong>Situation:</strong><br><?= h($dref['situation']); ?></p>
<p><strong>Prediction:</strong><br><?= h($dref['prediction']); ?></p>
<p><strong>Forecast:</strong><br><?= h($dref['forecast']); ?></p>
<p><strong>Early Warning:</strong><br><?= h($dref['early_warning']); ?></p>
<p><strong>Other Terms:</strong><br><?= h($dref['other_terms']); ?></p>
<p><strong>Note/Confidence (1-3):</strong><br><?= h($dref['note_confidence']); ?></p>

<p><strong>Quote:</strong><br> <?= h($dref['quote']); ?></p>

<?php include(SHARED_PATH . '/project-footer.php'); ?>
