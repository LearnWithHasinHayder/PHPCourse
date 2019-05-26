<?php
session_start();
require_once "functions.php";
$_user_id = $_SESSION['id']??0;
if(!$_user_id){
    header('Location: index.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo/Tasks</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="voc">
<div class="sidebar">
    <h4>Menu</h4>
    <ul class="menu">
        <li><a href="#" class="menu-item" data-target="words">All Words</a></li>
        <li><a href="#" class="menu-item" data-target="wordform">Add New Word</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
<div class="container" id="main">

    <h1 class="maintitle">
        <i class="fas fa-language"></i> <br/>My Vocabularies
    </h1>
    <div class="wordsc helement" id="words">
        <div class="row">
            <div class="column column-75">
                <div class="alphabets">
                    <select id="ageRangeField">
                        <option value="all">All Words</option>
                        <option value="A">A#</option>
                        <option value="B">B#</option>
                        <option value="C">C#</option>
                    </select>

                </div>
            </div>
            <div class="column column-25">
                <input type="text" placeholder="Search">
            </div>
        </div>
        <hr>

        <table class="words" >
            <thead>
            <tr>
                <th width="20%">Word</th>
                <th>Definition</th>
            </tr>
            </thead>
            <tbody>
			<?php
            $words = getWords($_user_id);
            if(count($words)>0) {
                $length = count($words);
                for ( $i = 0; $i < $length; $i ++ ) {
                    ?>
                    <tr>
                        <td><?php echo $words[$i]['word']; ?></td>
                        <td><?php echo $words[$i]['meaning']; ?></td>
                    </tr>
                    <?php
                }
            }
			?>
            </tbody>
        </table>
    </div>

    <div class="formc helement" id="wordform" style="display: none;">
        <form action="tasks.php" method="post">
            <h4>Add New Word</h4>
            <fieldset>
                <label for="word">Word</label>
                <input type="text" name="word" placeholder="Word" id="word">
                <label for="Meaning">Meaning</label>
                <textarea name="meaning" placeholder="Meaning" id="Meaning" style="height:100px" rows="10"></textarea>
                <input type="hidden" name="action" value="addword">
                <input class="button-primary" type="submit" value="Add Word">
            </fieldset>
        </form>
    </div>

</div>
</body>
<script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="assets/js/script.js?1"></script>
</html>