
<style>

body{

background-color: lightblue;

}


.container {
    display: flex;
    height: 100vh;
    width: 100%;
    
}
.left-column {
            flex: 1;
            padding: 150px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position:relative; right :200px;
            position:relative; bottom :1px;
        }
        
        .left-column img {
            display: block;
            width: 600px;
            height: 1150px;
          
            position:relative; right :80px;
            position:relative; bottom :150px;
        }
    
        .right-column {
            flex: 1;
            padding: 20px;
           
            
        }

        .form{

position:relative; right :190px;
position:relative; bottom :35px;

width: 120%;
}

</style>
<body>

     
<div class="container">
    <div class="left-column">

    <img src="<?= BASEURL ?>/img/BG-JAIP2.png" alt="login">


   
</div>


<div class="right-column">
  

            <div class="body-content-incentive">
                       
<br><br>






<div class="background">

    <div class="form">
        <center><h1> Sign up</h1></center>
        
        
    <input class="form-control" id="UserIC" type="text" placeholder="IC number" > <br>
    <input class="form-control" id="User_Name" type="text" placeholder="Name" ><br>
    <input class="form-control" id="User_PhoneNo" type="text" placeholder="Phone Number" ><br>

    <select class="form-select form-select-sm" id="User_Gendar" aria-label=".form-select-sm example">
        <option selected>Gendar</option>
        <option value="1">Male</option>
        <option value="2">Female</option>
        
      </select><br>

    <input class="form-control" id="User_Email" type="text" placeholder="Email" ><br>
    <label for="birthday">Date of Birth</label>
    <input class="form-control" id="User_BirthDate" type="date" placeholder="Date of Birth" ><br>
    <input class="form-control" id="User_Race" type="text" placeholder="Race" ><br>
    <input class="form-control" id="User_Citizenship" type="text" placeholder="Citizenship" ><br>
    <input class="form-control" id="User_Career" type="text" placeholder="Career" ><br>
    <input class="form-control" id="User_Address" type="text" placeholder="Address" ><br>
    <input class="form-control" id="User_Status" type="text" placeholder="Status" ><br>
    <select class="form-select form-select-sm" id="User_Gendar" aria-label=".form-select-sm example">
        <option selected>Role</option>
        <option value="1">User</option>
        <option value="2">Admin</option>
        <option value="3">Staff</option>
        <option value="4">Advisor</option>
      </select><br>
    <input class="form-control" id="User_Password" type="password" placeholder="Password" ><br>
    <input class="form-control" id="User_confPassword" type="password" placeholder="confirm Password" ><br>

      
        
      </div>



<center><input class="btn btn-primary" type="submit" value="Sign up" style="width:120%; position:relative; right:190px; position:relative; bottom:30px;"></center>

<br>


                        
                    
                </div>
            </div>
        </div>
        </div>
</body>