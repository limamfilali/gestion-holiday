<?php
include('includes/header.php'); 
include('includes/navbar2.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Changer votre mot de passe</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">
<form action="code.php" method="POST">

        <div class="modal-body" style="margin-left: 50px;">

            <div class="form-group" >
                <label> ancien mot de passe </label>
                <input type="password" name="username" class="form-control" placeholder="entrer votre ancien mot de passe">
            </div>
            <div class="form-group" >
                <label>nouveau mot de passe</label>
                <input type="password" name="email" class="form-control" placeholder="entrer votre nouveau mot de passe" style="width: 300px;" >
            </div>
            <div class="form-group">
                <label>confirmer votre mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="confirmer votre nouveau mot de passe">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="submit" name="registerbtn" class="btn btn-primary">changer</button>
        </div>
      </form>
    
  </div> 
  </div>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>