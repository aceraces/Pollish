<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pollish</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-inverse">    
			<div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Pollish</a>
                </div>
			

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="stats.php">Stats <span class="sr-only">(current)</span></a></li>                  
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
					<div id="google_translate_element" style="width:158!important"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
		</nav>
    </header>
			<?php
		$pollid = $_GET['pollid'];
		$connect = mysqli_connect('cvktne7b4wbj4ks1.chr7pe7iynqr.eu-west-1.rds.amazonaws.com','tgevu4heav8r9ya3','bxvdvshu91dospfk','x7tww49f1zeflsnc');
		$query = "SELECT * FROM polls WHERE pollid='$pollid'";
		$q = mysqli_query($connect, $query);
		while($row=mysqli_fetch_array($q)){
			$id=$row[0];
			$title=$row[1];
			$pollid=$row[2];
			$ipaddress=$row[3];	
			?>
			<table>
				<tr>	
					<td>
			<?php
			$questions = "SELECT * FROM questions WHERE pollid='$pollid'";
			$q2 = mysqli_query($connect, $questions);
			while($r=mysqli_fetch_array($q)){
			$question=$r[0];
			echo '<tr><td>'.$question.'</td><td>RadioButton</td></tr>';
			}
		}
		?>
					</td>
				</tr>
			</table>

	
    <div class="jumbotron">
        <div class="container text-center">
            <h1>This text here will change (front)</h1>
            <p>And also probably this whole thing here,<br> i just want to bring out the footer.</p>
        </div>
    </div>

    <footer class="container-fluid bg-4 text-center">
        <p>This is a very interesting footer note.</p>
    </footer>
<div class="container-fluid">
</div>

</body>
</html>