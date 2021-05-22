<?php
     session_start();
?>



<!--
       <div class="container">
      <image src="<?php echo $_SESSION['picture'] ?>" class="pic" alt="pic">
      <p>Hello </p>
      <b> <?php echo $_SESSION['givenName'] ?></b>
      <b> <?php echo $_SESSION['familyName'] ?></b>
      <br>
      <a class="logout" href="logout.php">Logout</a>
            </div>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>Metube</title>
</head>

<body>
    <nav class="sitelogo">
        <a href="#">
            <img src="MEtube.png" alt="MeTube Logo" class="metube-logo" />
        </a>

        <div class="container">
            <form id="searchForm">
                <div class="input-group py-2">
                    <input type="text" class="form-control" id="searchField">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-danger" placeholder="Search"><img class="search-icon" src="magnify.svg" ></button>
                    </div>
                </div>
            </form>


        </div>

        <div class="menu-icons">
	 <a href="#">
                <b> <?php echo $_SESSION['givenName'] ?></b>
            </a>
            <a href="#">
                 <image src="<?php echo $_SESSION['picture'] ?>" class="pic" alt="pic">
           
            </a>
           
        </div>
		<div class="menu">
		<div class="dropdown">
		<a class="logout" href="logout.php">LOG OUT</a>
		</div>
		</div>
    </nav>
	
	
		
    <div class="container-fluid mb-2">
        <div class="row">

            <!-- Let's make it responsive -->
            <div class="col-12 col-lg-8 mb-4">
                <!-- iframe -->
                <div class="card w-100">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe id="player" class="embed-responsive-item" src="" frameborder="0"></iframe>
                    </div>
                    <div class="card-body">
                        <h5 id="video-title" class="card-title">Video title</h5>
                        <h6 id="video-channelTitle" class="text-info">Channel name</h6>
                        <p id="video-description" class="card-text">Video description</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <ul class="list-unstyled" id="videoList"></ul>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="app.js"></script>

</body>

</html>
