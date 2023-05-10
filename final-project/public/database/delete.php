<?php require_once('../../private/initialize.php'); 
include(SHARED_PATH . '/project-header.php');

  $id = $_GET['id'];
    
  if(is_post_request()) {
    delete_dref($id);
    redirect_to(url_for('database/dref.php'));
  } else {
    $dref = find_dref_by_number($id);
  }
  
  $pageTitle = 'Delete dref'; ?>

  <h1>Delete Dref</h1>
  <p>Are you sure you want to delete this dref?</p>
  <p><?php echo h($dref['dref_number']); ?></p>
  
  <form action="<?php echo url_for('database/delete.php?id=' . h(u($dref['dref_number']))); ?>" method="post">
    <input type="submit" name="commit" value="Delete Dref"><br><br>
  </form>

<? include(SHARED_PATH . '/project-footer.php'); ?>