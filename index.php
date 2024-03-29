<!DOCTYPE html>
<html lang="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HNG: SlackBot</title>
    <link href="style.css" rel="stylesheet">
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                font-family: "Lato", sans-serif !important;
              }
              
              .sidebar {
                margin: 0;
                padding: 0;
                 min-height: 555px !important;
                background-color: #f1f1f1;
              }
              .sidebar a {
                display: block;
                color: black;
                padding: 16px;
                text-decoration: none;
                font-size: 18px;
              }
               
              .sidebar a.active {
                background-color: #76323f;
                color: white;
                font-size: 20px;
              }
              
              .sidebar a:hover:not(.active) {
                background-color: #555;
                color: white;
              }
              .page-content a{
                  text-decoration:none;
                  color: #76323f;
              }
              div.content {
                margin-left: 200px;
                padding: 1px 16px;
                height: 1000px;
              }
              .page-content {
                margin: 0;
                background-color: #e5e3e3;
                min-height: 555px !important;
            }
            .top-header{
                background-color: #565656;
                padding: 8px 0px;
                color: white;
            }
            .navbar-brand{
              
                float: none ;
                
            }
            .input-group{
                width: 500px !important;
                display: inline-block;
            }
            .btn{
                background: #76323f;
                color: #f1f1f1;
                padding: 10px;
            }
            .page-content hr{
                width:200%;
            }
            .modal-header {
           background-color: #76323f;
           padding:9px 15px;
           color:#FFF;
           font-family:Verdana, sans-serif;
           border-bottom:1px solid #eee;

            }
            
              @media screen and (max-width: 768px) {
                .sidebar {
                  width: 100%;
                  height: auto;
                  position: relative;
                }
                .sidebar a {float: left;}
                div.content {margin-left: 0;}
              }
              
              @media screen and (max-width: 375px) {
                .sidebar a {
                  text-align: center;
                  float: none;
                }
              }
              

</style>

</head>
              
<body>
    <header class="top-header" role="banner">
        <div class="navbar navbar-expand-lg">
            <div class="navbar-brand">
                <h3>StartNg-Contacts</h3>
            </div>

    </header>

        <div class="row">
            <div class="sidebar col-lg-2">
                <a class="active" href="#home">Dashboard</a>
                <a href="profile.php">Profile Settings</a>
                <a href="index.php">Contact Settings</a>
                <a href="signin.index">Log Out</a>
            </div>

            <div class="page-content col-lg-10  d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="p-5">
                        <h2>Want to add more than one Contacts at a time? <a href="importcontact.php">Import Contacts</a></h2>
                        <hr>
                    </div>

                   
	<div class="container form-top">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-body">
                            <form id="reused_form">
                                 <div class="form-group">
                                     <label> Name</label>
                                     <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                 </div>
                                 <div class="form-group">
                                     <label></i> Email</label>
                                     <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                 </div>
                                 <div class="form-group">
                                        <label></i> Phone Number</label>
                                        <input type="phone" name="phonenumber" class="form-control" placeholder="+234">
                                    </div>
                                    <div class="form-group">
                                            <label for="select group">Select Group</label>
                                            <select class="form-control" id="select group">
                                              <option>HNG Interns</option>
                                              <option>Mentors</option>
                                              <option>Ex Interns</option>
                                              <option>HNG Staffs</option>
                                              <option>Partners</option>
                                            </select>
                                          </div>
                                        <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                I have permission to add this contact
                                                </label>
                                              </div>
                                                
                                 <div class="form-group col-lg-8">
                                     <button class="btn btn-raised btn-warning">Add Contact</button>
                                 </div>
                                                 
                                 <div class="form-group col-lg-">
                                        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
                                                Create New Group
                                              </button>
                            
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Create New Group</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                        <div class="form-group">
                                                        <label></i> create Group</label>
                                                        <input type="group" name="group" class="form-control" placeholder="">
                                                    </div>
                                                     </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn btn-warning" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>  
                                                                      
                                            
                                 </div>
                            </form>
                           
                            
                        </div>
                    </div>
                
                    </div>



                </div>

            </div>

        </div>
</body>
</html>

<script type="text/javascript" src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         
                                                    
                       
