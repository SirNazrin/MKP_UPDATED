

<style>

body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 100px;
    height: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    position:relative; top :50px;

}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
    position:relative; top :50px;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
    position:relative; top :50px;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #86b7fe;
}

.card {
    background: #C7DDFE;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
</style>
<body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar, selected-navbar" href="<?= BASEURL; ?>/ManageProfile">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/PreCourse">Kursus Pra-Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageApplication">Permohonan Berkahwin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/MarriageRegistration">Pendaftaran Perkahwinan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Consultation">Khidmat Nasihat</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar" href="<?= BASEURL; ?>/Incentive">Insentif Khas Pasangan Pengantin</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3, col-navbar-keluar" href="<?= BASEURL; ?>/LogIn/">Keluar</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Page content-->
                <div class="body-content">

                    <!--Padding Between Container Contents & Homepage-->
                    <div style="padding: 20px">
                        <!--Content Container-->
                        <div class="container-M1" style="background-color: #C7DDFE;">
                            <diV style="background-color:#152C7C; color: white;">
                                <h3 class = "pt-2 pb-2 align-middle" style="padding-left: 12px;">Advisor Profile</h3> <!--Content Header-->
                            </div>
                                <!--Content of container-->
                               
                                <div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
                <img src="<?= BASEURL ?>/img/user.png" alt="">
				</div>
				<h5 class="user-name" id="SA_Name" ><?= $data['user']['User_Name']; ?></h5>
				<h6 class="user-email" id="SA_Email"> <?= $data['user']['User_Email']; ?></h6>
			</div>
			<div class="about">
				
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="row gutters">
			
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<input type="text" class="form-control" id="SA_Name" placeholder="Enter full name">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<input type="email" class="form-control" id="SA_Email" placeholder="Enter email ID" style="border-radius: 5px;  height:43px ;">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="number"> IC number </label>
					<input type="number" class="form-control" id="ServiceAdvisorIC" placeholder="Enter IC number" style="border-radius: 5px;  height:43px ;">
                    <label for="password"> passowrd </label>
					<input type="password" class="form-control" id="SA_Password" placeholder="change Password" style="border-radius: 5px;  height:43px ;">
				</div>
			</div>  
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					
                    <select class="form-control" id="SA_Gender" aria-label=".form-select-sm example" style="border-radius: 5px;  height:43px ; position:relative; top:22px;">
                                    <option selected>Enter Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                   
                                  </select>
                                  <label for="phone"> Phone number </label>
                    <input class="form-control" id="SA_PhoneNo" type="text" placeholder="Enter Phone Number" style="position:relative; top:22px;" >
				</div>
			</div>
		</div>
		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="text-right" >
					
					<button type="button" id="update-button" name="submit" class="btn btn-primary" style=" position:relative; top :20px;  position:relative; left:160px; width: 20%;
">Update</button>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
                                    </div>
                                </div>
                            </div>
                        </diV>

                        <script>
  // Get a reference to the update button
  var updateButton = document.getElementById("update-button");

  // Add event listener to the update button
  updateButton.addEventListener("click", function() {
    // Get the values from the input fields
    var fullName = document.getElementById("SA_Name").value;
    var email = document.getElementById("SA_Email").value;
    var icNumber = document.getElementById("ServiceAdvisorIC").value;
    var gender = document.getElementById("SA_Gender").value;
    var phone = document.getElementById("SA_PhoneNo").value;

    // Display an alert with the saved information
    var alertMessage =
      "THE INFORMATION UPDATED SUCCESSFULLY\n\n" +
      "Full Name: " + fullName + "\n" +
      "Email: " + email + "\n" +
      "IC Number: " + icNumber + "\n" +
      "Gender: " + gender + "\n" +
      "Phone Number: " + phone;

    alert(alertMessage);
  });
</script>

</body>