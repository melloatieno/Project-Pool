<?php    
require "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<html style="height: auto; min-height: 100%;"> 
      <head>
        <meta charset="UTF-8">
        <meta name="csrf-param" content="_csrf">
   
        <title>New Registration For Universities</title>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Ionicons -->
        <link href="/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="projectpool.css">
  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script>
            // check if document has loaded
            function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
            // and here's the trick (works everywhere)
            // use like
        </script>

        
        <style>

        </style>

    </head>

    <body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
    
    <div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
        

        </header>

        <div class="content-wrapper" style="min-height: 477px; background-color: rgb(204, 204, 255) !important;">
            <div class="container-fluid">
                <!-- Content Header (Page header) -->

                <section class="content-header" style="background-color: #CCCCFF !important;">

                </section>

                <!-- Main content -->
                <section class="content" style="background-color: #CCCCFF !important;">
  <div class="col-md-12">
    <div class="col-md-6" alignment="center" style="text-align: justify-all">
        Important Notes for Applicants.<br>
        <br>
        1. &nbsp; All sections of this registration application MUST be completed in full.<br>
        2. &nbsp; Please fill in all the required information.<br>      

    </div>

        <div class="col-sm-6">
       <h2>New Registration For Universities</h2>
         <strong>  Fill in the following and Click Submit to register </strong>
        <br>
        <form action="" method="post" class="form form-horizontal" style="margin-top:10px;" name="myform" id="myForm" onsubmit="return validateForm();">
            <input id="form-token" type="hidden" name="_csrf" value="">
           
           <input type="hidden" value="0" name="reg_type">
     <div class="form-group row">
       <label for="inst_Name" class="instName">Institution Name</label>
     <div>
       <input type="text" placeholder="enter institution name" name="name" required>
     </div> 
     <div class="form-group row">
       <label for="email"><b>Email</b></label>
     </div>
     <div>
      <input type="text" placeholder="Enter Email" name="email" required>
     </div>
       <span id="nameErrMsg" class="error"></span> 
     <div>
      <label for="psw"><b>Password</b></label><br>
      <input type="password" placeholder="Enter Password" name="psw"  required>
     </div>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <div>
       <input type="password" placeholder="Repeat Password" name="psw-repeat"   required>
      </div>
      <label>
        <input type="checkbox" checked="" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
     <br/>
      <div id="centerdiv" class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup" id="open">Sign Up</button>
      </div>
      <br/><br/>
</div>
</div>
        </form>
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div id="balloon-container">

                <span class="close">&times;</span>
                <br>
                <div>
                    <h1> 🎉 Congratulation 🎉</h1>
                    <p>
                        Congratulation, You made it. You've registered an account with Project-Pool.
                    </p>
                    <p>To start uploading you projects, Login by clicking the button bellow</p>
                    <br>
                    <button id="btn-in-modal"> <a href="D:\New folder\University.html"><b>Log In</b></a></button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>

</div>

<div class="col-md-12">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    </div>
    <div class="col-md-3"></div>
</div>

        <script type="text/javascript">
    function ShowHideDiv()
    {
        var reg_type = "0";
        if(reg_type !=2 && reg_type != 1){
          var sel1 = document.getElementById("sel1");
          var dvteachpractice = document.getElementById("dvteachpractice");
          dvteachpractice.style.display = sel1.value == "ECDE" ? "none" : "block";
        }
    }
    
    validateForm = function ()
    {
    return checkName();
    }

function nospaces(t)
{
  if(t.value.match(/\s/g)){
    t.value=t.value.replace(/\s/g,'');
  }
}


  }
}


function removeSpaces(string) {
 return string.split(' ').join('');
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  <footer class="main-footer">
        <div class="container-fluid">
            <div class="pull-right hidden-xs">
            </div>
            <strong>2020 © Project Pool.</strong> All rights reserved.
        </div>
        <!-- /.container -->
    </footer>

    
    <!-- ./wrapper -->
<script src="/assets/c8619007/yii.js?v=1554557912"></script>
<script src="/assets/3901bd42/js/bootstrap.js?v=1554560279"></script>
<script src="/assets/eb935fea/js/adminlte.min.js?v=1554560279"></script>
<script src="/js/jquery.validationEngine-en.js"></script>
<script src="/js/jquery.validationEngine.js"></script>
<script src="/js/initValidate.js"></script>
<script src="/js/multilevel-menu.js"></script>    
    
</body>
<script type="text/javascript" src="js/index.js"></script>
<script src="js/bal.js"></script>
</html>