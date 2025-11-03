<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="test2.css" rel="stylesheet" type="text/css">

</head>

<body>
    <form method="get" action="test2.php">
        <label for="fruits">Fruits</label>

        <!-- <select id="fruits" name="fruits" data-placeholder="Select fruits" data-max="2" data-search="false"
            data-select-all="false" multiple data-multi-select> -->
        <select id="fruits" name="fruits" data-placeholder="Select fruits"
            multiple data-multi-select>
            <option value="Apple">Apple</option>
            <option value="Banana">Banana</option>
            <option value="Blackberry">Blackberry</option>
            <option value="Blueberry">Blueberry</option>
            <option value="Cherry">Cherry</option>
            <option value="Cranberry">Cranberry</option>
            <option value="Grapes">Grapes</option>
            <option value="Watermelon">Watermelon</option>
        </select>
        <input type="submit" value="sent">
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="test2.js"></script>

</body>

    <!-- <!-- Include jQuery + Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Dropdown -->
<select id="subject-select" class="form-control" multiple>
  <option value="math">Math</option>
  <option value="science">Science</option>
  <option value="english">English</option>
</select>

<script>
$(document).ready(function() {
  $('#subject-select').select2({
    tags: true, // allows custom entries
    placeholder: 'Select or add a subject',
    allowClear: true,
    tokenSeparators: [',']
  });
});
</script> -->


    
</html>
<?php
print_r($_GET['fruits']);
?>
