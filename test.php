<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Include jQuery + Select2 -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <script src="test.js"></script>
    <link rel="stylesheet" href="test.css">
</head>

<body>


    <!-- Dropdown -->
    <form method="get" action="test.php">
        <select id="subject-select" name="okay[]" class="form-control" style="width:50vw" multiple>
            <option value="math" selected>Math</option>
            <option value="science">Science</option>
            <option value="english">English</option>
        </select>
        <input type="submit" value="submit" />
    </form>


    <script>
        $(document).ready(function() {
            $('#subject-select').select2({
                tags: true, // allows custom entries
                placeholder: 'Select or add a subject',
                allowClear: true,
                tokenSeparators: [',']
            });
        });

        //  $(document).ready(function() {
        //     // Initialize Select2 with tagging enabled
        //     $('#subject-select').select2({
        //         tags: true, // allow new options
        //         placeholder: 'Select or add a subject',
        //         tokenSeparators: [',', ' '], // separate by comma or space
        //         allowClear: true, // adds a clear (X) button
        //         createTag: function(params) {
        //             var term = $.trim(params.term);
        //             if (term === '') return null;

        //             // Custom label for new options
        //             return {
        //                 id: term,
        //                 text: term,
        //                 newTag: true // mark as new
        //             };
        //         },
        //         insertTag: function(data, tag) {
        //             // Put new tag at the end of the list
        //             data.push(tag);
        //         }
        //     });
        // });
    </script>


</body>

</html>
<?php
print_r($_GET['okay']);
?>