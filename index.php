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
      <div class="form_page page_1" data-page_var="1" id="page_1_1">
        <label for="email">University Email: </label>
        <input id="name" type="email" name="email" autocomplete="off" placeholder="" required>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_2" data-page_var="1" id="page_2_1">
        <h2>Page 2.1</h2>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_2" data-page_var="2" id="page_2_2">
      <h2>Page 2.2</h2>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_3" data-page_var="1" id="page_3_1">
      <h2>Page 3</h2>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_4" data-page_var="1" id="page_4_1">
      <h2>Page 4</h2>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_4" data-page_var="2" id="page_4_2">
      <h2>Page 5</h2>
        <span class="next-btn" type="next">Next</span>
      </div>

      <div class="form_page page_5" data-page_var="1" id="page_5_1">
      <h2>Page 6</h2>
        <input id="submission" id="submission" type="submit">
      </div>
    </form>
  </div>

</body>

</html>