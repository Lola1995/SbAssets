
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyApp | Services</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
<header class="header-main">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="account.php">SBAssets</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="chat.php" >Live chat</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-sub pull-right">
                    <li><a href="auth/logout.php">Logout</a></li>


                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>

<div class="container chats">

    <?php
    require 'auth/connect.php';

    $query="SELECT * FROM users ORDER BY id DESC LIMIT 50";

    $result=mysqli_query($connect,$query);



    echo "<table class=\"table table-condensed table-hover\">";

    while($row=mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo "<td class=\"text-mute\"> <b>".$row['time'].'</b></td>';
        echo "<td class=\"text-primary\">".$row['user'].'</td>';
        echo "<td class=\"primary\"><i>".$row['message'].'<i></td>';

        echo '</tr>';

    }

    echo "</table>";

    ?>





</div>
<br><br>
<div class="container">
    <form method="post" action="classes/process.php" role="form">


        <div class="form-group">
            <textarea class="form-control" placeholder="Message" name="message"></textarea>

        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block"id="submit" name="submit" value="Leave a Mesage ">

        </div>
    </form>
</div>



</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
