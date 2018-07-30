<?php

// $versionsJson = file_get_contents("https://secure.php.net/releases/?json");

$versionsJson = file_get_contents("phpreleases.json");

$releases = json_decode($versionsJson, true);

// echo "<pre>";
// var_dump($releases);
// echo "</pre>";
?>

<h1>PHP Yayınları</h1>
<?php foreach ($releases as $mainVersion => $versionDetail): ?>
  <h2><?=$mainVersion?></h2>
  <h3><?=$versionDetail['version']?></h3>
  <ul>
    <?php foreach($versionDetail['source'] as $sourceFile): ?>
      <li><?=$sourceFile['filename']?></li>
    <?php endforeach; ?>
  </ul>
<?php endforeach; ?>
