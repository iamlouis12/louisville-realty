<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> CONTACT US</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/new.css" rel="stylesheet">
    </head>
    <body>

    <?php include_once "include/nav.php" ?>
    
       <div class="container">
           
           <div class="row mt-5">
            <h1> Get in touch with us </h1>
            <p>
                There are many ways to get in touch with us.
                you can choose your preferred method and we will be at the other end.
            </p>
            <p>
                We want to make it as easy as possible for you to find the 
                information and help your need. Simply fill the feedback
                 form and we will get back to you right away.
            </p>
           </div>
           <div class="row mt-5 mb-3">
               <label class="col-sm-2"> Your Name</label>
               <div class="col-md-10">
                   <input type="text" class="form-control" placeholder="Name">
               </div>
           </div>
           <div class="row mt-5 mt-3">
               <label class="col-sm-2"> Your Email Address</label>
               <div class="col-md-10"> 
                   <input type="text" class="form-control" placeholder="Email">
               </div>
           </div>
           <div class="row mt-5 mb-3">
               <label class="col-sm-2"> Your Phone Number</label>
               <div class="col-md-10">
                   <input type="text" class="form-control" placeholder="mobile number">
               </div>
           </div>
           <div class="row mt-5">

            <label class="col-sm-2"> Your Feedback </label>
            <div class="col-md-10">
                <textarea rows="7" cols="135" placeholder="Message..."></textarea>
            </div>
           
           </div>
           <div class="row">
               <div class="col-md-2"> </div>
               <div class="col-sm-2">
                <button class="btn btn-secondary btn-sm"> Submit</button>
               </div>
           </div>
           <div class="row mt-5 mb-3">
               <div class="col-md-1"> </div>
               <div class="col-md-4">
                   <h2> Contact info </h2> 
                <p>
                    Suite 112b Samfa Plaza Wuse Zone 5, FCT Abuja Nigeria.
                </p>
                <p>
                    info@louisville.com.ng
                </p>
            </div>
           </div>
       </div>

       <?php include_once "include/footer.php" ?>
    </body>
</html>