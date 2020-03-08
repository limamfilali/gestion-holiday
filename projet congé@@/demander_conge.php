<?php
include('includes/header.php'); 
include('includes/navbar2.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Rrécupérer votre mot de passe</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>
si vous étes oublie votre mot de passe , entrer votre email pour le récupérer .
  <!-- Content Row -->
  <div class="row">

   <form action="code.php" method="POST">

        <div class="modal-body" style="margin-left: 50px;">

            <div class="form-group" >
                <label> Type de congé </label>
                  <select style=" width:300px; " class="form-control">
                    <option>annuel</option>
                    <option>maladie</option>
                    <option>matérnité</option>
                    <option>hajj</option>
                  </select>
                <label> Date début de congé </label>
                <input type="Date" name="username" class="form-control" placeholder="entrer la date de début de votre congé" style=" width:300px; ">

                <label> Date fin de congé </label>
                <input type="Date" name="username" class="form-control"  style=" width:300px; ">

                <label> Déscription </label>
                <input type="text" name="username" class="form-control" placeholder="écrire une description à propos de type de congé" style=" width:500px; ">
            </div>
            
        <div class="modal-footer">
            <button type="submit" name="registerbtn" class="btn btn-primary">envoyer</button>
        </div>
      </form> 
  </div> 
  </div>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
