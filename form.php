<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <title>Form</title><br>
    <style>
     .error {color: #FF0000;}
       </style>
    </head>
  <body>
  <h2 class="text-center" style="color: blue"><ins>Registration Form<ins></h2><br>
  <form>
<div class="container">
    <div class="row">
        <div class="col-md-6">
      
  <div class="form-group">
    <i class="fas fa-user"></i>
    <label for="Fname">Firstname</label>
    <span class="error">*<?php $Err?></span>
    <input type="text" class="form-control" id="Fname" placeholder="firstname" required>
    <br>
   <i class="fas fa-user"></i>
   <label for="Lname">Lastname</label>
   <span class="error">*<?php $Err?></span>
    <input type="text" class="form-control" id="Lname" placeholder="lastname" required>
    <br>
    <i class="fas fa-envelope"></i>
    <label for="email">Email</label>
    <span class="error">*<?php $Err?></span>
    <input type="text" class="form-control" id="email" placeholder="Xyz@gmail.com" required>
    <br>
    <i class="fas fa-phone"></i>
    <label for="phone">PhoneNumber</label>
    <span class="error">*<?php $Err?></span>
    <input type="text" class="form-control" id="phonenumber" placeholder="+254..." required>
    <br>
    <h6>Gender<span class="error">*<?php $Err?></span></h6>
                    <div>
                    <input type="radio" aria-label="Male">Male
                    <input type="radio" aria-label="Female" >Female
                    </div>
                    <br>
                    
     <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Terms and condition
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  </div>
  </div>
                   
    <div class="col-md-6">
   <div class="form-group">
    <label for="date">Date of Birth<span class="error">*<?php $Err?></span></label>
    <input type="date" class="form-control" id="Fname" placeholder="dd/mm/yy" required>
    <br>
<h6>Language<span class="error">*<?php $Err?></span></h6> 
                <div> &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check1" name="html" value="">HTML &nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check2" name="css" value="">CSS &nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check3" name="php" value="">PHP &nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check4" name="js" value="">JS &nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check5" name="go" value="">GO &nbsp;&nbsp;&nbsp;
                <input type="checkbox" class="form-check-input" id="check5" name="jquery" value="">Jquery
                </div>
                <br>
<h6>Hobbies and Talents<span class="error">*<?php $Err?></span></h6>
<select class="custom-select custom-select-md mb-3">
  <option selected>Select</option>
  <option value="1">Coding</option>
  <option value="2">Lifting Weight</option>
  <option value="3">Dancing</option>
  <option value="4">Running</option>
</select>
<br>
<label for="pass">Password<span class="error">*<?php $Err?></span></label>
<input type="password" class="form-control" id="pass" required>
    <br>
    <label for="pass">Retype Password<span class="error">*<?php $Err?></span></label>
    <input type="password" class="form-control" id="pass" required>
    
    </div>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block">Register</button>
</div>
  
 
             
        </div>
        </div>
      
        
    </div>
    </div>
        
    </form>
   
    
    <!-- jQuery 1st,js,Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  </body>
</html>