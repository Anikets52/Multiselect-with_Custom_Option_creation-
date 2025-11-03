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

</html>
<?php
print_r($_GET['fruits']);
?>