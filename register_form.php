<?php $title ='Register' ?>
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
			<div class="top-main-content">
				<span class="col-lg-10" style="font-size:30px;">New And Innovative market opportunities</span>
				<span class="" style="font-size:20px">Published on 2016/10/17</span>
			</div>
			<div class="clearfix"></div>
			<div class="main-content container">
				<form id="signupForm" method="post" class="form-horizontal" action="">
				<div class="form-group">
					<br/>
					<label class="col-lg-2" for="firstname">First name</label>
					<div class="col-lg-5">
						<input type="text" id="firstname" class="form-control"name="firstname" placeholder="First name" /><br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2" for="lastname">Last name</label>
					<div class="col-lg-5">
						<input type="text" id="lastname" class="form-control"name="lastname" placeholder="last name" /><br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2" for="email">Email</label>
					<div class="col-sm-5">
						<input type="email" id="email" class="form-control" name="email" placeholder="Email" /><br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2" for="pass">Password</label>
					<div class="col-sm-5">
						<input type="password" id="pass" class="form-control" name="pass" placeholder="your password" /><br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2" for="year">Year old</label>
					<div class="col-sm-5">
						<input type="text" id="year" class="form-control" name="year" placeholder="year name" /><br/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-2 control-label" style="text-align: left;">Phone number</label>
					<div class="col-lg-5">
					    <input type="tel" class="form-control" name="phoneNumber" placeholder="+841234567"/>
					</div>
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> Comfirm</label>
					<br/>
					<br/>
				</div>
				<input type="submit" name="submit" value="OK"> <br/> <br/>
			</form>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>