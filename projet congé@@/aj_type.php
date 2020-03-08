<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<style>
	.confirm{
		text-align:center;
		margin-top: 0px;
		margin-bottom: 1em;
		color:blue;
	}
</style>
 <div class="row">
 	
<form action="" method="POST">
        <?php if(isset($msg)){?><p class="confirm"><em><?php echo $msg;}?></em></p>
        <div class="modal-body" style="margin-left: 50px;">

            <div class="form-group" >
                <label> TYPE_CONGE</label>
                <input type="text" name="type" class="form-control" placeholder="TYPE_CONGE...">
            </div>
            <div class="form-group" >
                <label>DESCRIPTION</label>
                <input type="text" name="desc" class="form-control" placeholder="DESCRIPTION..." style="width: 300px;" >
            </div>
            
        
        </div>
        <div class="modal-footer">
            <button type="submit" name="ajouter" class="btn btn-primary">AJOUTER</button>
        </div>
      </form>
    
  </div> 
  </div>
  <?php
 include('connection.php');
// $type=$_POST['type'];
 //$description=$_POST['desc'];
if(isset($_POST['ajouter']))
{
	$req="INSERT INTO type_conge(TYPE_CONGE,DESCRIPTION) values('".$_POST['type']."','".$_POST['desc']."')";
	$res=mysqli_query($dbh,$req);
$msg= "l'agent a bien été ajouter";
}
else{
	$msg= "ereur d'ajaut";
}

?>
	 

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
