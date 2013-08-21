<html>
<!--//First need to make a sigup/signin page - 1.Need to set a variable to zero or false to detirmine the begining of a session.
//2. Need to make 2 href links to either "log in" or "Sign Up"
//3. for signup, need to create HTML form with fields to enter; firstName, LastName, UserName, AccountNumber, Password, and StartingBalance. Also need submit button.
//4.need to set the form so the information is sent back to this file, so that it can be written to a .csv file.
//For sign in option,1. need a form that has 2 feilds for UsserName and PassWord, and a submitt button. 
//2. Need a methodn to send that info back to this file.
//3.Need a function to open trhe .csv file and check for a match to the UserNameand if foun, to check for a match in the Password
//4. Need a function to start a session to hold the connnection until logout.-->
<head>
    <title>Bank Program</title>
      <style type="text/css">
        body {
		font-family:Verdana,arial,sans-serif;
		font-size:10pt;
		margin:30px;
		background-color:#ffcc00;
		}
		span {
		font-family: Impact;
		}
		body{
		text-align:center;
		}
		
	  </style> 
		<div id="wrapper" style="width:100%; text-align:center">
			<img src="http://farm6.staticflickr.com/5104/5635223299_82decd38ef.jpg" width="500" height="357" alt="Bank"></a>
		</div>
  </head>
    <body>
      <h1>Welcome to <span>The Bank</span></h1>
	  <h2>We welcome new customers </h2>
		<ul>
			<li><a href="put link here">Open a new account</a></li>
			<li><a href="put link here">Log in to your account</a></li>
		</ul>
          
	</body>
</html>
<?php
?>
