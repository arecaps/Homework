<html>
<!--//I. First need to make a signup/signin page - 1.Need to set a variable to zero or false to determine the beginning of a session.
//2. Need to make 2 href links to either "log in" or "Sign Up"
//3. for signup, need to create HTML form with fields to enter; firstName, LastName, UserName, AccountNumber, Password, and StartingBalance. Also need submit button.
//4.need to set the form so the information is sent back to this file, so that it can be written to a .csv file.
//II. For sign in option,1. need a form that has 2 fields for UserName and PassWord, and a submit button. 
//2. Need a method to send that info back to this file.
//3.Need a function to open the .csv file and check for a match to the UserName and if found, to check for a match in the Password
//4. Need a function to start a session to hold the connection until logout.
//III. Add Debits and credits, 1.Need to pull current balance
//2. Need a form to enter Amount, TransType, checkbox for additional transaction, and submit button.
//3. need a function to add and subtract to modify the current balance.
//4. need a function to store the closing balance at the end of a session
//IV signout button 1. need to make link to signout
//5. need a destructor to save all the info and close the session.-->
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
			<li><a href="bank.php?class=form1">Open a new account</a></li>
			<li><a href="bank.php?class=form2">Log in to your account</a></li>
		</ul>
          
	</body>
</html>
<?php
?>
