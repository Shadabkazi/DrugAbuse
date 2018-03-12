<html>
<head>
<title>Registration Form</title>
<link href="css/style.css" rel="stylesheet" type="text/css">

<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
	
	<div class="animbrand">
        <a class="navbar-brand animate" href="index.html">Drug Free<span class="glyphicon glyphicon-registration-mark"></span></a>
      </div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav navbar-right">
        <li class="visible-xs">
          <form action="http://bootsnipp.com/search" method="GET" role="search">
            <div class="input-group">
              <input class="form-control" name="q" placeholder="Search for snippets" type="text">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
              </span>
            </div>
          </form>
        </li>
        <li class=""><a href="index.html" class="animate">Home</a></li>
        <li>
          <a href="#" class="dropdown-toggle animate active" data-toggle="dropdown" data-hover="dropdown"data-delay="10" data-close-others="false">Contents<span class="caret"></span></a>
         <ul class="dropdown-menu" role="menu">
            <li class=""><a href="drugsuse.html" class="animate">What types of drugs are commonly abused?<span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
            <li class=""><a href="symptoms.html" class="animate">Symptoms and signs of drug abuse and addiction <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
            <li><a href="brain.html" class="animate">What happens to your brain when you take drugs? <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
            <li class="dropdown-header">Diagnosis</li>
            <li class=""><a href="Diagnosis.html" class="animate">Diagnosis Of Addiction <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
            <li class="dropdown-header">Prevention </li>
            <li class=""><a href="prevention.html" class="animate">Prevention <span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
            <li class=""><a href="consumption.html" class="animate">Drugs Consumption<span class="pull-right glyphicon glyphicon-pencil"></span></a></li>
          </ul>
        </li>
               <li class=""><a href="about.html" class="animate">About us</a></li>
        <li class=""><a href="treatment.html" class="animate">Treatment</a></li>        
                  <li class=""><a href="#" data-toggle="modal" data-target="#rModal" class="animate">Register</a></li>
          <li id="nav-login-btn" class=""><a href="#" data-toggle="modal" data-target="#myModal" class="animate">Login</a></li>
        
        <li class="hidden-xs"><a href="#toggle-search" class="animate" data-toggle="modal" data-target="#sModal"><span class="glyphicon glyphicon-search"></span></a></li>

        
      </ul>
    </div>

<a href="index.html" ><img src="images/logo.png" class="logo" alt="logo"></a>



<!--login modal starts-->
	<div class="container">
  
  <!-- Trigger the modal with a button -->
  <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          
          
          <H1 align="center" color="blue">LOG IN&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" ></span></h1>
        </div>
        <div class="modal-body " >
          <form name="login" action="loginaction.php" method="post" >
	<div class="login_box">
		
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-envelope"></i>
		<input class="form-control  " name="username" placeholder="Username" type="text" id="login_username" required>
		
		</div>

		<br/>
		
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-lock"></i>
		<input class="form-control" placeholder="Password" name="password" type="password" required>
		</div>
		<br/>
		
		
		          <button type="submit"  class="btn btn-primary btn-lg btn-block">Sign In&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" ></span></button>
		
	</div>
	
        </div>
        <div class="modal-footer">

          <div class="col-md-12">
			  
			  
			  <a href="#" data-toggle="modal" data-target="#rModal">Not Registered Yet? Register now</a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <a href="login_page.html">Alternate Login</a>


        		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel&nbsp;&nbsp;<span class="glyphicon glyphicon-ban-circle" ></span></button>
        </form>
        </div>
      </div>
     </div>
      
    </div>
  </div>
  
</div>
	
	<!--login modal ends-->
	
	
	<!--register modal starts-->
	<div class="container">
  
  <!-- Trigger the modal with a button -->
  <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button -->

  <!-- Modal -->
  <div class="modal fade" id="rModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          <br>
          <div align="center" class="padding-top-and-bottom-fiftheen-px align-text-center">
                              <i class="glyphicon glyphicon-user saqibglyph" ></i>
                          </div>
                          
                          <H1 align="center" color="blue">Register</h1>
          
        </div> 
        <div class="modal-body " >
		<form name="frmregister"action="registerAction.php" method="post" onSubmit="return formvalidate();"	>	<div class="login_box">
		<!-- Name -->
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-user"></i>
		
		<input class="form-control" name="name" id="name login_username" type="text" size="30" placeholder="Name"  required/>
		
		</div>

		<br/>
		
		<!--Email -->
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-envelope"></i>
		
		<input class="form-control" name="email" id="email" type="text" size="30" placeholder="Email id" required/>
		
		</div>

		<br/>
		
		<!--password -->
		
		
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-lock"></i>
		<input class="form-control" placeholder="Password" name="password" id="password" type="password" size="30" required/>
		</div>
		<br/>
		
		<!--Phone -->
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-phone"></i>
		
		<input class="form-control" name="mobile" id="mobile" type="mobile" size="30" placeholder="Mobile no." required/>
		
		</div>

		<br/>
		
		
		<!--age -->
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-font"></i>
		
		<input class="form-control" name="age" id="age" type="age" size="30" placeholder="Age" required/>
		
		</div>

		<br/>
				
		
		
		
		
		          <button class="btn btn-primary btn-lg btn-block">Register</button>
		
	</div>
	
        </div>
        <div class="modal-footer">

          <div class="col-md-12">
			  
			  <a href="#" data-toggle="modal" data-target="#myModal">Already Registered? Login</a>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <a href="register.php">Alternate Register</a>


        		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel&nbsp;&nbsp;<span class="glyphicon glyphicon-ban-circle" ></span></button>
        </form>
        </div>
      </div>
     </div>
      
    </div>
  </div>
  
</div>
	
	<!--register modal ends-->
	
	
<!--search strats-->
	<!--
	<form action="sphider/search.php" method="get"> 
<input type="text" name="query" id="query" size="40" value="" action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500">	
<input type="submit" value="Search"> 
<input type="hidden" name="search" value="1"> 
</form> 



<div class="bootsnipp-search animate">
    <div class="container">
      <form action="sphider/search.php" method="GET" role="search">
        <div class="input-group">
          <input type="text" class="form-control" name="q" placeholder="Search for snippets and hit enter">
          <span class="input-group-btn">
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span></button>
          </span>
        </div>
      </form>
    </div>
  </div>
  
  -->
  <!---->
  
  <div class="container">
  
  <!-- Trigger the modal with a button -->
  <!--button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</button -->

  <!-- Modal -->
  <div class="modal fade" id="sModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          
          
          <H1 align="center" color="blue">Search&nbsp;&nbsp;<span class="glyphicon glyphicon-search" ></span></h1>
        </div>
        <div class="modal-body " >
		<form action="sphider/search.php" method="get">	
			<div class="login_box">
		
		<div class="left-inner-addon ">
		<i class="glyphicon glyphicon-search"></i>
	
		
		<input class="form-control  " type="text" name="query" id="query" value="" action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500">	
			
			
			
		
		</div>

		<br/>
					<input type="hidden" name="search" value="1">
		          <button type="submit" value="Search" class="btn btn-primary btn-lg btn-block"><span class="glyphicon glyphicon-search" ></span></button>
		
	</div>
	
        </div>
        <div class="modal-footer">

          <div class="col-md-12">
			  
			  
			  


        		<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel&nbsp;&nbsp;<span class="glyphicon glyphicon-ban-circle" ></span></button>
        </form>
        </div>
      </div>
     </div>
      
    </div>
  </div>
  
</div>
  
    <!---->

	<!--search ends-->
	
	
	
	<div id="body">
		<div id="campaigns">
			<div class="header">
<h1 align="center" ><b>REGISTER</b></h1>
				
	<form name="frmregister"action="registerAction.php" method="post" onSubmit="return formvalidate();"	>
		<table class="form" border="0">
			<tr>
				<th><label for="name"><strong>Name:</strong></label></th>
				<td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
			</tr>

			<tr>
				<th><label for="email"><strong>Email:</strong></label></th>
				<td><input class="inp-text" name="email" id="email" type="text" size="30" /></td>
			</tr>
			
			<tr>
				<th><label for="password"><strong>Password:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
			</tr>

<tr>
				<th><label for="mobile"><strong>Mobile:</strong></label></th>
				<td><input class="inp-text" name="mobile" id="mobile" type="mobile" size="30" /></td>
			</tr>
<tr>
				<th><label for="age"><strong>Age:</strong></label></th>
				<td><input class="inp-text" name="age" id="age" type="age" size="30" /></td>
			</tr>

			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Submit" alt="Submit"" />
				
				<input class="send_btn" type="reset" value="Reset" alt="Reset"" /></td>
				
			</tr>
		</table>
	</form>
				
			</div>
			
		</div>
	</div>
	<div id="footer">
		<div>
			<form action="database/sendmail.php">
				<h2>Send A Message</h2>
				<label for="name"><span>Your Name:</span>
					<input type="text" id="name" name="name">
				</label>
				<label for="emailad"><span>Email Address:</span>
					<input type="text" id="emailad" name="emailad">
				</label>
				<label for="message"><span class="message">Message:</span>
					<textarea name="message" id="message" cols="30" rows="10"></textarea>
				</label>
				<input type="submit" class="send" value="Send">
			</form>
			<div>
				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							Andheri West,<br>Mumbai
						</p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
							+91-8879870826   
						</p>
					</li>
					<li>
						<b>Email</b>
						<span>:</span>
						<p>
							<a href="email" class="email" target="_blank">saqibmubarak@gmail.com</a>
						</p>
					</li>
					<li>
						<b>Social</b>
						<span>:</span>
						<div>
							<a href="http://www.facebook.com/unknownanonym" id="facebook" target="_blank">facebook</a>
							<a href="#" id="twitter" target="_blank">twitter</a>
							<a href="#" id="googleplus" target="_blank">google&#43;</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<p>
			&copy; Copyright 2032. All rights reserved.
		</p>
	</div>

</html>
