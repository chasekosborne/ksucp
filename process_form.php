<?php

$email = htmlspecialchars($_POST["email"]);

# Empty php file
# Currently trying to figure out database scheme on local device
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link rel="stylesheet" href="style.css">
</head>

<!-- Need to make more modern (of course) -->
<body>
  <div class="titlebar">
    <span class="title">ksucp</span><span class="subtitle"> | Kent State University Competitive Programming Club</span>
  </div>
  <!-- Still working on submission form -->
  <h2><?=$email?></h2>

</body>

</html>