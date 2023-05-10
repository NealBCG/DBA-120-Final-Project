<?php
  if(!isset($page_title)) { $page_title = 'Final Project'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>Final Project - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
  </head>

  <body>
    <header>
      <h1><a href="<?= url_for('/'); ?>">Final Project for DBA-120</a></h1>
    </header>
    <navigation>
      <ul>
      <li><a href="<?= url_for('database/region.php'); ?>">Region Table</a></li>
      <li><a href="<?= url_for('database/subregion.php'); ?>">Subregion Table</a></li>
      <li><a href="<?= url_for('database/country.php'); ?>">Country Table</a></li>
      <li><a href="<?= url_for('database/dref.php'); ?>">Dref Table</a></li>
      <li><a href="<?= url_for('database/keyword.php'); ?>">Keyword Table</a></li>
      <li><a href="<?= url_for('database/quote.php'); ?>">Quote Table</a></li>
      </ul>
    </navigation>

