
<?php

include_once 'autoload.php';
include_once "app/db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    
  </head>


  <?php
  
  if(isset($_POST['adduser'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $department=$_POST['department'];
    $ip=$_POST['ip'];
    $ipt=$_POST['ipt'];
    $degination=$_POST['degination'];
    $pcname=$_POST['pcname'];
    $pctype=$_POST['pctype'];
    $pcconfig=$_POST['pcconfiguration'];


  

  }
  
  ?>

<body>

<div class="container">

    <div class="card">
        <div class="card-header card_header">
            Add New User
        </div>
        <div class="card-body">
            <form action="" onsubmit="return validation()" method="POST" enctype="multipart/form-data">

                <div class="card_body_one">
                    <div class="form-group card_body_one_one">
                        <label for="exampleInputEmail1">Name</label>
                        <span id="namspan" class="text-danger"></span>
                        <input  name="name"  id="nam" class="form-control"   placeholder="Enter name" autocomplete="off">
                        
                        
                    </div>

                    <div class="form-group card_body_one_two">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
                      
                    </div>
                </div>    

                    <div class="card_body_two">
                        <div class="form-group card_body_two_one">
                            <label for="phone">phone</label>
                            <span id="mobilespan" class="text-danger"></span>
                            <input name="phone"  id="mobile" class="form-control"   placeholder="Enter mobile number" autocomplete="off">
                            
                        
                         </div>

                        <div class="form-group card_body_two_two">
                            <div class=" form-group card_body_two_two_one">
                                <label for="inputState">Department</label>
                                <select name="department" id="inputState" class="form-control" autocomplete="off">
                                    <option selected>Choose...</option>
                                    <option value="management">Management</option>
                                    <option value="qc">Qc</option>
                                    <option value="qa">QA</option>
                                    <option value="production">Production</option>
                                    <option value="engineering">Engineering</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                       

                            <div class="form-group card_body_two_two_two">
                                <label for="Internet status">Internet Status</label><br>
                                <span class="text-danger" id="internetspan"></span>
                              
                                <div class="form-check form-check-inline">
                                    <input value="yes" name="internet" class="form-check-input" type="radio"  id="interneton"  autocomplete="off">
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input value="no" name="internet" class="form-check-input" type="radio"  id="internetoff"  autocomplete="off">
                                    <label  class="form-check-label" for="inlineRadio1">No</label>
                                </div>
                        
                            </div>

                            
                        
                        </div>
                    </div>

                    <div class="card_body_three">
                            <div class="card_body_three_one">
                                <label for="exampleInputEmail1">IP Number</label>
                                <input name="ip"  class="form-control"   placeholder="Enter ip" autocomplete="off">
                            </div>

                            <div class="card_body_three_two">
                                <label >IPT Extension</label>
                                <input  name="ipt" class="form-control"   placeholder="Enter IPT" autocomplete="off">
                            </div>

                            <div class="card_body_three_three">
                            <label for="inputState">Degignation</label>
                                <select name="degination" id="inputState" class="form-control" autocomplete="off">
                                    <option selected>Choose...</option>
                                    <option value="manager">Manager</option>
                                    <option value="srdp">SR. Deputy Manager</option>
                                    <option value="dmanager">Deputy Manager</option>
                                    <option value="sam">Sr. Ass. Manager</option>
                                    <option value="am">Ass. Manager</option>
                                    <option value="se">Sr. Executive</option>
                                    <option value="executive">Executive</option>
                                    <option value="jroff">Jr. Officer</option>

                                </select>
                            </div>
                    </div>

                    <div class="for-group card_body_four">
                        <div class="card_body_four_one">
                                <label >Pc Name</label>
                                <input name="pcname"  class="form-control"   placeholder="Enter Pc Name" autocomplete="off" >
                        </div>

                        <div class="card_body_four_two">
                        <label for="Internet status">Pc Type</label><br>
                              
                              <div class="form-check form-check-inline">
                                  <input value="desktop" name="pctype"  class="form-check-input" type="radio"  id="inlineRadio1" autocomplete="off">
                                  <label class="form-check-label" for="inlineRadio1">Desktop</label>
                              </div>

                              <div class="form-check form-check-inline">
                                  <input value="laptop" name="pctype" class="form-check-input" type="radio"  id="inlineRadio1" autocomplete="off" >
                                  <label class="form-check-label" for="inlineRadio1">Laptop</label>
                              </div>
                        </div>

                        <div class="card_body_four_three">

                                <label >Pc Configuration</label>
                                <input  name="pcconfiguration" class="form-control"   placeholder="Enter Pc Configuration" autocomplete="off">
                        </div>
                    </div>

                    
                
            
            
        </div>
        <div class="card_footer">
            <input name="adduser" class="btn btn-primary" type="submit" value="add">
        </div>

        
        </form>
    </div>

</div>

<script type="text/javascript">

function validation(){

var name=document.getElementById('nam').value;
var mobile=document.getElementById('mobile').value;
var interneton=document.getElementById('interneton').checked;
var internetoff=document.getElementById('internetoff').checked;







if(name==''){
document.getElementById('namspan').innerHTML= 'please  fill the username';

return false;
}
else if(mobile==""){


    document.getElementById('mobilespan').innerHTML="** please fill the mobile number";
    return false;
}

else if(isNaN(mobile)){

    document.getElementById('mobilespan').innerHTML="**  number";

    return false;
}
else if(mobile.length !=11){
document.getElementById('mobilespan').innerHTML="** Invalied ";
return false;
}

else if((mobile.charAt(0)!=0) && (mobile.charAt(1)!=1)){

    document.getElementById('mobilespan').innerHTML="** Invalied Mobile ";
}



else if((interneton=="") && (internetoff=="")){

    document.getElementById("internetspan").innerHTML="please select one ";
    return false;
}

}


</script>


  
    
</body>
   
</html>