<?php
header('X-XSS-Protection:0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Our First Form</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magnam fugiat doloribus officia. Vero
                illum debitis ipsam necessitatibus eaque sed.</p>

            <p>
				<?php if ( isset( $_REQUEST['fname'] ) && !empty($_REQUEST['fname']) ) { ?>
                    First Name: <?php echo $_REQUEST['fname']; ?>  <br/>
				<?php } ?>
				<?php if ( isset( $_REQUEST['lname'] ) && !empty($_REQUEST['lname'])) { ?>
                    Last Name:  <?php echo $_REQUEST['lname']; ?> <br/>
				<?php } ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">

                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">

                <button type='submit'>Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>