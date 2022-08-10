<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Register with Us</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/new.css" rel="stylesheet">
    </head>
    <body>
       <?php include_once "include/nav.php" ?>

       <form action='include/process.php' method="post" enctype="multipart/form-data" > 
        <div class="container">
            <h1 class="mt-3 mb-3 text-center"> REGISTER </h1>
            <h2> Create your own account</h2>
            <div class="row mt-5 mb-3">
                <label class="col-sm-2">Name:</label>
                <div class="col-md-8">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2">Username:</label>
                <div class="col-md-8">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2">E-mail:</label>
                <div class="col-md-8">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2">Password:</label>
                <div class="col-md-8">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2">Confirm password:</label>
                <div class="col-md-8">
                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm password">
                </div>
            </div>
            <div class="row mt-5 mb-3">
                <label class="col-md-2"> 
                <h5 class="mb-3"> Account Type</h5>
                </label>

                <div class="col-md-5">
                        <select name="gen" class="form-control"> 
                            <option> click here to select... </option>
                            <option value="Individual"> Individual(searching for property) </option>
                            <option value="Property Owner"> Property Owner</option>
                            <option value="Landlord"> Landlord </option>
                            <option value="Property Developer"> Property Developer </option>
                            <option value=" Estate Agent"> Estate Agent</option>
                            <option value="Artisan"> Artisan</option>
                            <option value="Journeyman"> Journeyman</option>
                        </select>
                  </div>

               
                <!-- <div class="col-md-2 form-check"> 
                    <input type="checkbox" value="gen" class="form-check-input">Individual (Searching for property)
                </div>
                <div class="col-md-2 form-check"> 
                    <input type="checkbox" value="gen" class="form-check-input">Property Owner (Landlord)
                </div>
                <div class="col-md-2 form-check"> 
                    <input type="checkbox" value="gen" class="form-check-input">Property Developer
                </div>
                <div class="col-md-2 form-check"> 
                    <input type="checkbox" value="gen" class="form-check-input">Estate Agent
                </div>
                <div class="col-md-2 form-check"> 
                    <input type="checkbox" value="gen" class="form-check-input">Artisan (Journeyman)
                </div> -->


                <div class="row mt-3">
                    <label class="col-md-2">Upload your passport </label>
                    <div class="col-md-5">    <input type="file" name="img" class="form-control"  >

                    <input Type="submit" class="btn btn-secondary mt-3" name="submit" value="Register">
                 </div>
                </div>
                
            </div>
            
            <p class="mt-3 mb-5">
                By registering you accept our terms of <a href="#">use and privacy</a>. 
                You also agree that we and our selected partners may contact
                you with relevant offers and services.
            </p>
        </div>
        </form>

        <?php include_once "include/footer.php" ?>
    </body>
</html>