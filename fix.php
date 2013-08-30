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
			echo '<li><a href="fix.php?class=form1">Open a new account</a></li>';
			echo '<li><a href="fix.php?class=form2">Log in to your account</a></li></ul>';
		}
        protected function post() {
			//print_r($_POST);
			$info=($_POST);
				$name = current($info);
				$number= rand(1111111, 9999999);
				$acct_no = array('account_number' => $number);
				$result = array_merge_recursive($info, $acct_no);
					$obj = new write();
					$obj->write_csv($result);
				 //if(array_key_exists('email', $info)) {
				 if ($_SERVER['QUERY_STRING'] == 'class=form1') {
               echo "<h1>You have succesfully opened a new account. </h1><br>" ;			
	               echo "<h2>{$name}, your account number is " .  $number . '<br> <a href="fix.php?class=form2">Click here to login.</a></h2>';
            } else { 
	            echo "<h1>Welcome back!</h1>". '<br> <a href="fix.php?class=form3">Click here to enter new transactions.</a>';
		   }
		}
	}
    class form1 extends page {
		public function get() {
			echo '<h2>Create an account</h2>' . "<br> \n";
			
			$form = '<FORM action="fix.php?class=form1" method="post">
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
			echo '<a href="fix.php">Click here to return to the homepage.</a>' . "<br> \n";
		}
	}
	class form2 extends page {
		public function get() {
			echo '<h2>Sign in to your account</h2>' . "<br> \n";
			
			
			$form = '<FORM action="fix.php?class=form2" method="post">
    					 <P>
					  <LABEL for="username">Username: </LABEL>
                      <INPUT type="text" name="username"id="username" required="required"><BR>
					  <LABEL for="pswrd">Password: </LABEL>
                      <INPUT type="password" name="pswd"id="pswd" required="required"><BR>
                      <INPUT type="submit" value="Send"> <INPUT type="reset">
                        </P>
                     </FORM>';
			
			echo $form;
			echo '<a href="fix.php">Click here to return to the homepage.</a>' . "<br> \n";
		}
	}
	class form3 extends page {
		public function get() {
			echo '<h2>Enter your transactions</h2>' . "<br> \n";
			
			
			$form = '<FORM action="fix.php?class=form3" method="post">
    					 <P>
					  <LABEL for="amount">Amount: </LABEL>
                      <INPUT type="number" name="amount"id="amount" required="required"><BR>
					  <INPUT type="radio" name="type" value="debit"> Debit<BR>
                      <INPUT type="radio" name="type" value="credit"> Credit<BR>
                      <INPUT type="submit" value="Send"> <INPUT type="reset">
                        </P>
                     </FORM>';
			
			echo $form;
			echo '<a href="fix.php">Click here to return to the homepage.</a>' . "<br> \n";
		}
	}
	class write {
	    function write_csv($result) {
	    
			$keys =array_keys($result);
			$values=array_values($result);
			$user=array($keys, $values);
                        $name = $values[3];
		
				if (!file_exists("{$name}.csv")) {
				    $fp = fopen("{$name}.csv", 'w');
					  foreach ($user as $fields) {
					  fputcsv($fp, $fields);
					}
						fclose($fp);	
				} else {
				    $nameCheck = 1;
					echo "Sorry, that username is not available, please choose another name";
				}
		}
	}	
?>			
	</body>
</html>