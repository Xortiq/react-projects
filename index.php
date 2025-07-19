<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Hello World</title>
  </head>
  <body>
    <div id="root">
      <ul>
      <?php
      $subdirs = array_filter(glob('*'), 'is_dir');
      if (!empty($subdirs)) {
        foreach ($subdirs as $key => $value) {
          echo "<li><a href=\"$value\">$value</a></li>";
        }
      }
      ?>
      </ul>
    </div>
  </body>
</html>