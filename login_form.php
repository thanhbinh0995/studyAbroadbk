<?php $title = 'Login' ?>
<?php
    require_once 'connect.php';

    if($user->is_loggedin()!="")
    {
        $user->redirect('index.php');
    }

    if(isset($_POST['btn-login']))
    {
        $uname = $_POST['email'];
        $umail = $_POST['email'];
        $upass = $_POST['pass'];

        if($user->login($uname,$umail,$upass))
        {
            $user->redirect('index.php');
        }
        else
        {
            $error = "Wrong Details !";
        } 
    }
?>
<?php include 'header.php'; ?>
	<section id="main-content">
		<div class="top-title">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				</ol>
			</div>
		</div>
		<div class="container">
			<div class="clearfix"><br/></div>
			<div class="main-content container">
				<form id="signupForm" method="post" class="form-horizontal" action="login.php">
    				<div class="form-group">
    					<label class="col-lg-2" for="email">Email</label>
    					<div class="col-sm-5">
    						<input type="email" id="email" class="form-control" name="email" placeholder="Email" />
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="col-lg-2" for="pass">Password</label>
    					<div class="col-sm-5">
    						<input type="password" id="pass" class="form-control" name="pass" placeholder="your password" />
    					</div>
    				</div>
    				<input type="submit" name="submit" value="LOGIN"> <br/> <br/>
    			</form>
			</div>
		</div>
	</section>
    <?php include 'footer.php' ?>