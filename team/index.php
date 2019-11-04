<!DOCTYPE html>
<html>
<head>
	<title>My Team - SCU Iron Bronco</title>

     <!-- Meta Tags -->
     <meta charset="utf-8">
	<meta name="author" content="Jeffrey Collins - jrcollins@scu.edu">
     <meta name="author" content="Anthony Fenzl - afenzl@scu.edu">
     <meta name="author" content="Chris Nelson - cnelson@scu.edu">
	<meta name="description" content="Santa Clara University's Annual Iron Bronco Competition Management Service.">
	<meta name="og:image" content="../resources/images/SCU.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Fonts -->
     <link rel="stylesheet" href="https://use.typekit.net/mmd3tyo.css">

     <!-- Styles -->
	<link rel="stylesheet" type="text/css" href="../css/master.css">
     <link rel="stylesheet" type="text/css" href="../css/team.css">

     <!-- Scripts -->
	<!-- <link rel="shortcut icon" type="image/png" href="../resources/0.jpg"/> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="735698212957-dvu2h24tapar68t9f8p7b66uhaamc96f.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="g-signin2" data-onsuccess="onSignIn" data-theme="light"></div>
     <div class="page_mask"></div>

	<header>
		<div id="navopen">
			<img src="../resources/images/navopen_alt.svg" alt="Button: Open Navbar">
		</div>
		<div id="navclose">
			<img src="../resources/images/navclose.svg" alt="Button: Close Navbar">
		</div>
          <nav id="nav">
               <h1 class="IronLogo">Iron Bronco</h1>
               <div>
     			<a class="navlink" href="..">Leaderboard</a>
     			<a class="navlink" href="../find">Find a Team</a>
     			<a class="navlink" href=".">My Team</a>
     			<a class="navlink" href="../profile">My Profile</a>
               </div>
               <div class="option_button_container">
                    <div class="option_button">
                         <p>Enter Distance</p>
                    </div>
                    <div class="option_button">
                         <button id=customBtn type="button" onclick="signIn()">Sign In</button>
                    </div>
               </div>
		</nav>
	</header>

	<div class="page_contents">
		<h1>My Team</h1>
		<div class="page_row">
               <div class="page_feature">
                    <h2>Team Progress</h2>
     			<div class="page_feature_content">
     			     <p id="team_running_progress">running: </p>
					<p id="team_cycling_progress">cycling: </p>
					<p id="team_swimming_progress">swimming: </p>
					<p id="team_total_progress">total: </p>
     			</div>
               </div>
			<div class="page_feature">
				<h2>Member Contributions</h2>
			<div class="page_feature_content">
				<div class="graph">

				</div>
				<p>team member progress graph</p>
			</div>
		</div>
		</div>
		<div class="page_row">
			<div class="page_feature">
				<h2>Team Details</h2>
			<div class="page_feature_content">
                    <p>team name</p>
										<p>members</p>
			</div>

			</div>
		</div>
	</div>

</body>

	<script type="text/javascript" src="../scripts/navbar.js"></script>

	<script type="text/javascript" src="../scripts/sso.js"></script>
	<script>startApp();</script>