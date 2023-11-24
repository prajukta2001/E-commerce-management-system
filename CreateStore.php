<?php
session_start();
?>

<!DOCTYPE html>

<html>
<head>
	<title> Create Store </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body>
	<fieldset>
		<div>  
		<p><h1 align="center">
           <span style="color:indianred"> ECMS </span>
           <span style="color:indigo;"><sup> BD</sup></span>
           </h1>
        </p>
		   <h3 align= "right">
		   	<span> Welcome </span>
           <span style="color:purple"> <?php echo $_SESSION["Name"]?> </span>
		   <span><a style="color:purple;" href="Homepage.php"> | Logout </a></span>
           </h3>
		<hr>  
	</div>  
			<div>
    <fieldset>
    	
            <h2 align="right">
            
                <a style ="color:teal;" href="Dashboard.php"> | Dashboard </a>
                <a style ="color:teal;" href= "My Profile.php"> | My Profile</a>
                <a style ="color:teal;" href="EditProfile.php"> | Edit Profile</a>
                <a style ="color:teal;" href="Change Profile Picture Form.php"> | Change Profile Picture</a>
                <a style ="color:teal;" href="Changepass.php"> | Change Password</a>
         
        </h2>
        


  </fieldset>
  <div class="container" style="width:500px;">  
                <h3 align="center"> <b>Create Store</b></h3><br />                 
                <form action="Controller/Addstore.php"  method="post" enctype="multipart/form-data"> 
                   
                     <br />  
                     <label>Store Name</label>  
                     <input type="text" name="storename" class="form-control" required/><br />  
                     <label>Store ID</label>
                     <input type="text" name = "storeid" class="form-control" required /><br />
                     <label>Branch Name</label>
                     <input type="text" name = "branchname" class="form-control" required /><br />
                     <label>Store Location</label>
                     <input type="text" name = "storelocation" class="form-control"required /><br />

                    <fieldset>
                    <legend>Store Type</legend>
                    <input type="radio" id="mobilestore" name="storetype" value="mobilestore">
                     <label for="mobilestore">Mobile Store</label>                     
                     <input type="radio" id="laptopstore" name="storetype" value="laptopstore">
                     <label for="laptopstore">Laptop Store</label>
                     <input type="radio" id="other" name="storetype" value="other">
                     <label for="other">Other</label><br>

                     <legend>Predictable Store Opening Date</legend>
                     <input type="date" name="predate"> <br><br>

                     <div>
         <hr>
         <input type="submit" name="submit" value="Click Here To Create Store !!" class="btn btn-info" /><br /> 
       </div>
                    </fieldset> 
                </form>
            </div>
        </div>
    </fieldset>
</body>
</html>