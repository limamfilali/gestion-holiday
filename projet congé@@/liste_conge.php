<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liste des congés des agents</h1>
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
            <th>accépter </th>
            <th>refuser </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td> ahmed jalil</td>
            <td> informatique</td>
            <td> annuel </td>
            <td>01/03/2019</td>
            <td>01/04/2019</td>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> accépter</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> refuser</button>
                </form>
            </td>
          </tr>
        
        </tbody>
      </table>

    
  </div> 
  </div>






  <?php
include('includes/scripts.php');
include('includes/footer.php');
?>