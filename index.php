<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://ksucp.com/JS/form.js"></script>
</head>

<!-- Need to make more modern (of course) -->
<body>
  <div class="titlebar">
    <span class="title">ksucp</span><span class="subtitle"> | Kent State University Competitive Programming Club</span>
  </div>
  <!-- Still working on submission form -->
  <div class = "questionbox">
    <form action="process_form.php" method="post">
      <label for="email">University Email: </label>
      <input id="name" type="email" name="email" autocomplete="off" placeholder="" required>
      <br>
      <input id="submission" type="submit">
    </form>
  </div>

</body>

</html>