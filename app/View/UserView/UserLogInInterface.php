<!DOCTYPE html>
<html lang="en">
<head>
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
            height: 720px;
          
            position:relative; right :80px;
            position:relative; bottom :150px;
        }
    
        .right-column {
            flex: 1;
            padding: 20px;
           
            
        }
        .form{

            position:relative; right :190px;
            position:relative; top :100px;
           width: 120%;
        }

        .link{
            position:relative; top :80px;


        }
        
    </style>
</head>
<body>
<div class="container">
    <div class="left-column">

    <img src="<?= BASEURL ?>/img/BG-JAIP3.png" alt="login">


   
</div>

    <div class="right-column">
    <h1 style="position:relative; right:40px;  position:relative; top :80px;
        "> Login </h1>
    <div class="form">
    <form action="">      
<input type="email" class="form-control" id="floatingInput" placeholder="No. Kad Pengenalan">
<label for="floatingInput">	</label>


<input type="password" class="form-control" id="floatingPassword" placeholder="Kala Laluan">
<label for="floatingPassword"></label>
<br>

<select class="form-select form-select-sm" id="User_Gendar" aria-label=".form-select-sm example">
    <option selected>Role</option>
    <option value="1">User</option>
    <option value="2">Admin</option>
    <option value="3">Staff</option>
    <option value="4">Advisor</option>
  </select>
  
</form>             
                  <div class="link">
                   <a href="<?= BASEURL; ?>/Register" class="button-link">Pennngguna baru? </a>
                    <a href="<?= BASEURL; ?>/LogIn/ResetPassword" class="button-link">| Lupa kala Laluan?</a>
                </div>
</div>

<input class="btn btn-primary" type="submit" value="Masuk" style=" position:relative; right :190px;
            position:relative; top :100px; width: 120%">
                 
    </div>
</div>
</body>
</html>