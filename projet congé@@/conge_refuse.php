<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liste des congés refusé</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="background-color: white;">
        <thead>
          <tr>
            <th> ID </th>
            <th> Nom </th>
            <th>Service </th>
            <th>Type congé</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td> ahmed jalil</td>
            <td> informatique</td>
            <td> annuel </td>
            <td>05/05/2017</td>
            <td>25/05/2017</td>
          </tr>
        
        </tbody>
      </table>

    
  </div> 
  </div>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>