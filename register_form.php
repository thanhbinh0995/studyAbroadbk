<?php $title ='Register';?>
<?php
session_start();
?>
<?php include 'header.php'; ?>
<?php

$name=$fname=$lname=$email=$pass=$year=$phone=$nameErr="";
$check = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['pass']);
    $year = $_POST['year'];
    $phone = $_POST['phoneNumber'];
    include('connect.php');
    
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $check = 1;
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
            $nameErr = "white space is not allowed";
            $check = 1;
        }
        else{
            try{
                $stmt = $conn->prepare("Select count(*) from user where name= '$name'  ");
                $stmt->execute();
                $count = $stmt->fetchColumn(0);
            }
            catch(PDOException $e)
            {
                echo $stmt."<br>".$e->getMessage();
            }
            if($count >= 1){
                $nameErr = "Username has been exist ";
                $check = 1;
            }
        }
    }
    if($check==0){
        if($user->register($fname,$lname,$name,$email,$pass,$phone,$year))
        {
            header('Location: /studyAbroadbk/sign-up-succes.php');
        }
    }
}
?>
        <section id="main-content">
          <div class="top-title">
            <div class="container">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              </ol>
            </div>
          </div>
          <div class="container">
            <div class="top-main-content">
              <span class="col-lg-10" style="font-size:30px;">New And Innovative market opportunities</span>
              <span class="" style="font-size:20px">Published on 2016/10/17</span>
            </div>
            <div class="clearfix"></div>
            <div class="main-content container">
              <form id="signupForm" method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">



                <div class="form-group">
                  <br/>
                  <label class="col-lg-2" for="firstname">First name</label>
                  <div class="col-lg-5">
                    <input value="<?php echo $fname ?>" type="text" id="firstname" class="form-control" name="firstname" placeholder="First name" />
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2" for="lastname">Last name</label>
                  <div class="col-lg-5">
                    <input value="<?php echo $lname ?>" type="text" id="lastname" class="form-control" name="lastname" placeholder="last name" />
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2" for="name">Username</label>
                  <div class="col-lg-5">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Username" />
                    <br/>
                    <?php echo $nameErr; ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2" for="email">Email</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $email ?>" type="email" id="email" class="form-control" name="email" placeholder="Email" />
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2" for="pass">Password</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $pass ?>" type="password" id="pass" class="form-control" name="pass" placeholder="your password" />
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2" for="year">Year old</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $year ?>" type="text" id="year" class="form-control" name="year" placeholder="year name" />
                    <br/>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label" style="text-align: left;">Phone number</label>
                  <div class="col-lg-5">
                    <input value="<?php echo $phone ?>" type="tel" class="form-control" name="phoneNumber" placeholder="+841234567" />
                  </div>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Comfirm</label>
                  <br/>
                  <br/>
                </div>
                <input type="submit" name="submit" value="OK">
                <br/>
                <br/>
              </form>
            </div>
          </div>
        </section>
<?php include 'footer.php'; ?>
