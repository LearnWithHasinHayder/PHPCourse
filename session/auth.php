<?php
session_start( [
    'cookie_lifetime' => 300, //5 minutes
] );
$error = false;
//session_destroy();


if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
    if ( 'admin' == $_POST['username'] && '6d0ebbbdce32474db8141d23d2c01bd9628d6e5f' == sha1($_POST['password']) ) {
        $_SESSION['loggedin'] = true;
    } else {
        $error = true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_POST['logout'])){
    $_SESSION['loggedin'] = false;
    session_destroy();
}
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
            <h2>Simple Auth Example</h2>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">

            <?php
            //echo sha1("rabbit")."<br/>";
            if ( true == $_SESSION['loggedin'] ) {
                echo "Hello Admin, Welcome!";
            } else {
                echo "Hello Stranger, Login Below";
            }
            ?>
        </div>
    </div>
    <div class="row" style="margin-top:100px;">
        <div class="column column-60 column-offset-20">
            <?php
            if($error){
                echo "<blockquote>Username and Password didn't match</blockquote>";
            }
            if ( false == $_SESSION['loggedin'] ):
                ?>
                <form method="POST">
                    <label for=username>Username</label>
                    <input type="text" name='username' id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" class="button-primary" name="submit">Log In</button>
                </form>
            <?php
            else:
                ?>
                <form action="auth.php" method="POST">
                    <input type="hidden" name="logout" value="1">
                    <button type="submit" class="button-primary" name="submit">Log Out</button>
                </form>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>