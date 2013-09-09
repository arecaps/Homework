<html>
<!--//First need to make a sigup/signin page -Done 1.Need to set a variable to zero or false to determine the beginning of a session.
//2. Need to make 2 href links to either "log in" or "Sign Up" - Done
//3. for signup, need to create HTML form with fields to enter; firstName, LastName, UserName, AccountNumber, Password, and StartingBalance. Also need submit button.
//4.need to set the form so the information is sent back to this file, so that it can be written to a .csv file.
//For sign in option,1. need a form that has 2 fields for UsserName and PassWord, and a submit button. 
//2. Need a method to send that info back to this file.
//3.Need a function to open the .csv file and check for a match to the UserNameand if found, to check for a match in the Password
//4. Need a function to start a session to hold the connection until logout.-->
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
		}a{
		text-decoration:none;
		color:black;
		font-family:cursive;
		font-size:18px;
		}
		
		
	  </style> 
		<div id="wrapper" style="width:100%; text-align:center">
			<img src="http://farm6.staticflickr.com/5104/5635223299_82decd38ef.jpg" width="500" height="357" alt="Bank"></a>
		</div>
  </head>
    <body>
 <?php  
	  $obj = new program();
      //$acct_no= rand(1111111, 9999999);
	  
		class program {
		  public function __construct() {		
			if(isset($_REQUEST['class'])) {
				$class = $_REQUEST['class'];
				$obj = new $class();
			} else {	
				$obj = new page();
			}
			//print_r($_REQUEST);
		 }
	  }
	  class page {	
	  
		public function __construct() {
			if($_SERVER['REQUEST_METHOD'] == 'GET') {
				$this->get();
			} else {
				$this->post();
				//print_r($_SERVER);
			}	
		}
		protected function get() {
		  echo "<h1>Welcome to <span>The Bank</span></h1>
	            <h2>We welcome new customers </h2>
		        <ul>";
			echo '<li><a href="bank.php?class=form1">Open a new account</a></li>';
			echo '<li><a href="bank.php?class=form2">Log in to your account</a></li></ul>';
		}
        protected function post() {
			if ($_SERVER['QUERY_STRING'] == 'class=form1') {
				$obj = new write();
				$obj->write_csv();
            } elseif ($_SERVER['QUERY_STRING'] == 'class=form2'){ 
				//$login = ($_POST);
					$obj =new validate;
					$obj->checkName();
		    } elseif ($_SERVER['QUERY_STRING'] == 'class=form3'){ 
				//print_r($_POST);
				$obj = new transactions();
				$obj->write_trans();
					//echo "<h1>Thank You</h1>". '<br> <a href="bank.php?class=form3">Click here to enter another transaction.</a>';
			} elseif ($_SERVER['QUERY_STRING'] == 'class=logout'){ 
				
			} else {
				echo 'error';
			}
		}
	}
    class form1 extends page {
		public function get() {
			echo '<h2>Create an account</h2>' . "<br> \n";
			
			$form = '<FORM action="bank.php?class=form1" method="post">
    					 <P>
   					 <LABEL for="firstname">First name: </LABEL>
             		  <INPUT type="text" name="firstname" id="firstname" required="required"><BR>
    			     <LABEL for="lastname">Last name: </LABEL>
              		  <INPUT type="text" name="lastname" id="lastname" required="required"><BR>
    				 <LABEL for="email">email: </LABEL>
                      <INPUT type="text" name="email" id="email" required="required"><BR>
					 <LABEL for="username">Username: </LABEL>
                      <INPUT type="text" name="username"id="username" required="required"><BR>
					 <LABEL for="pswrd">Password: </LABEL>
                      <INPUT type="password" name="pswd"id="pswd" required="required"><BR>
                      <INPUT type="submit" value="Send"> <INPUT type="reset">
                        </P>
                     </FORM>';
			
			echo $form;
			echo '<a href="bank.php">Click here to return to the homepage.</a>' . "<br> \n";
		}
	}
	class form2 extends page {
		public function get() {
			echo '<h2>Sign in to your account</h2>' . "<br> \n";
			
			$form = '<FORM action="bank.php?class=form2" method="post">
    					 <P>
					  <LABEL for="username">Username: </LABEL>
                      <INPUT type="text" name="username"id="username" required="required"><BR>
					  <LABEL for="pswrd">Password: </LABEL>
                      <INPUT type="password" name="pswrd"id="pswrd" required="required"><BR>
                      <INPUT type="submit" value="Send"> <INPUT type="reset">
                        </P>
                     </FORM>';
			
			echo $form;
			echo '<a href="bank.php">Click here to return to the homepage.</a>' . "<br> \n";
		}
	}
	class form3 extends page {
		public function get() {
			echo '<h2>Enter your transactions</h2>' . "<br> \n";
			
			$form = '<FORM action="bank.php?class=form3" method="post">
    					 <P>
					  <LABEL for="amount">Amount: </LABEL>
                      <INPUT type="text" name="amount"id="amount" required="required"><BR>
					  <INPUT type="radio" name="type" value="debit" required="required"> Debit<BR>
                      <INPUT type="radio" name="type" value="credit" required="required"> Credit<BR>
                      <INPUT type="submit" value="Send"> <INPUT type="reset">
                        </P>
                     </FORM>';
			
			echo $form;
			echo '<a href="bank.php">Click here to return to the homepage.</a>' . "<br> ";
			echo '<br> <br> <a href="bank.php?class=logout">Logout.</a>';
		}
	}
	class write {
	    function write_csv() {
			$info=($_POST);
				$name = current($info);
				$number= rand(1111111, 9999999);
				$acct_no = array('account_number' => $number);
				$result = array_merge_recursive($info, $acct_no);

			$keys =array_keys($result);
			$values=array_values($result);
			$user=array($keys, $values);
                        $name = $values[3];
						$fname = $values[0];
		
				if (!file_exists("{$name}.csv")) {
				    $fp = fopen("{$name}.csv", 'w');
					  foreach ($user as $fields) {
					  fputcsv($fp, $fields);
					}
						fclose($fp);	
							echo "<h1>You have succesfully opened a new account. </h1><br>" ;			
							echo "<h2>{$fname}, your account number is " .  $number . '<br> <a href="bank.php?class=form2">Click here to login.</a></h2>';
						
				} else {
					echo "Sorry, that username is not available, please choose another name";
				}
		}
	}

	class validate {
		function checkName() {
			$login =($_POST);
				$users = $login['username'];

				$first_run = TRUE;
				if ((@$handle = fopen("{$users}.csv", "r")) !== FALSE) {
					while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
						if ($first_run == TRUE) {
							$field_names = $data;
							$first_run   = FALSE;
						} else {
							$data      = array_combine($field_names, $data);
							$records = $data;;
						}	
					} 
					fclose($handle); 
						if ($records['pswd'] == $login['pswrd']) {
							echo "<h1>Welcome back!</h1>". '<br> <a href="bank.php?class=form3">Click here to enter new transactions.</a>';
							echo '<br> <br> <br> <a href="bank.php?class=logout">Logout.</a>';
							session_start();
							$_SESSION['username'] = $users;
							//print_r($_SESSION);
						} else { 
							echo 'Sorry, that password does not match, please try again.  <br> <br>
					<a href="bank.php?class=form2">Click here to re-enter your login information.</a>';
						}
				} else {
					echo 'Sorry, that username was not found, please try again.  <br> <br>
					<a href="bank.php?class=form2">Click here to re-enter your login information.</a> <br> <br>
					<a href="bank.php?class=form1">Don\'t have an account? Click here to open one.</a>';
				}
		}
	}
	class transactions {
		function write_trans() {	
			$test = ($_POST);
			session_start();
			//print_r($_SESSION);
			if (($_SESSION)==NULL) {
				echo '<a href="bank.php?class=form2">Your session has ended. Please click here to login again.</a>';
			} else {
				$name = ($_SESSION['username']);
				$fp = fopen("{$name}trns.csv", 'a');
					fputcsv($fp, $test);
					fclose($fp);
			echo "<h1>Thank You</h1>". '<br> <a href="bank.php?class=form3">Click here to enter another transaction.</a>';
			echo '<br><br> <a href="bank.php?class=read_transactions">Click here for your current balance.</a>' .
			'<br><br> <a href="bank.php?class=logout">Logout.</a>';
			}
		}
	}
	class read_transactions {
		function __construct() {
			session_start();
			$name = ($_SESSION['username']);
			$balance =0;
			$subtract =0;
				@$handle = fopen("{$name}trns.csv", "r");
					while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {
						$records[] = $data;	
					}	 
					fclose($handle);
					foreach ($records as $row) {
						${($row[1]).'s'}[] = $row;
						}
					foreach ($credits as $add) {
						$balance = ($balance + $add[0]);
						}
						//print_r($balance);
					foreach ($debits as $sub) {
						$subtract = ($subtract + $sub[0]);
						}
						//print_r($subtract);
					$current = ($balance - $subtract);
					echo "<h1>Your current balance is \$$current .<br></h1>";
						include 'file.php';
					
		}
	}
	class logout {
		function __construct() {
			session_start();
			print_r($_SESSION);
			echo "<h1>Thank You. We appreciate your business, please come back soon.</h1>";
				session_destroy();
		}
	}
?>			
	</body>
</html>