<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<style>
  .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
</style>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="POST">
        
        <div class="modal-body">

            <div class="form-group">
                <label> nom </label>
                <input type="text" name="nom" class="form-control" placeholder="Entrer le nom">
            </div>
            <div class="form-group">
                <label> prénom </label>
                <input type="text" name="prenom" class="form-control" placeholder="entrer le nombre des jours de congé annuel">
            </div>
            <div class="form-group">
                <label>CIN</label>
                <input type="text" name="cin" class="form-control" placeholder="entrer le CIN">
            </div>
            <div class="form-group">
                <label>service</label>
                <input type="text" name="service" class="form-control" placeholder="Entrer le service">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" name="email" class="form-control" placeholder="Entrer l'email'">
            </div>
            <div class="form-group">
                <label>grade</label>
                <input type="text" name="grade" class="form-control" placeholder="entrer le grade actuel">
            </div>
            <div class="form-group">
                <label>mot de passe</label>
                <input type="password" name="password" class="form-control" placeholder="Entrer le mot de passe">
            </div>
            <div class="form-group">
                <label>confirmer votre mot de passe</label>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirmer le mot de passe">
            </div>
            <div class="form-group">
                <label>reléquat</label>
                <input type="number" name="relequat" class="form-control" placeholder="entrer le nombre des jours de congé annuel">
            </div>
            <div class="form-group">
                <label>cnss</label>
                <input type="text" name="cnss" class="form-control" placeholder="entrer le nombre des jours de congé annuel">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">annuler</button>
            <button type="submit" name="ajouter" class="btn btn-primary">enregistrer</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Agent Profile 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Ajouter Agent Profile 
            </button>
    </h6>
    <?php
include('connection.php');
if(isset($_POST['ajouter']))
{

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];   
$cin=$_POST['cin']; 
$password=md5($_POST['password']); 
$service=$_POST['service']; 
$email=$_POST['email']; 
$grade=$_POST['grade'];  
$cnss=$_POST['cnss']; 
$relequat=$_POST['relequat']; 
 


$sql = $dbh->prepare("INSERT INTO agent(NOM,PRENOM,CIN,MOTPASSE,ID_DEP,EMAIL,GRADE,CNSS,RELEQUAT) values(:nom,:prenom,:cin,:password,:service,:email,:grade,:cnss,:relequat)");
$sql->execute(array(':nom' => ucfirst(strtolower(htmlspecialchars(trim($_POST['nom'])))),':prenom' => ucfirst(strtolower(htmlspecialchars(trim($_POST['prenom'])))),':cin' => strtoupper(htmlspecialchars(trim($_POST['cin']))),
':password' => crypt($_POST['password'],"md5"),
':service' => ucfirst(strtolower(htmlspecialchars(trim($_POST['service'])))),
':email' => $_POST['email'],
':grade' => ucfirst(strtolower(htmlspecialchars(trim($_POST['grade'])))),
':cnss' => htmlspecialchars($_POST['cnss']),
':relequat' => htmlspecialchars($_POST['relequat'])

));
//$query = $dbh->prepare($sql);
//$query->bindParam(':fname',$fname,PDO::PARAM_STR);
//$query->bindParam(':lname',$lname,PDO::PARAM_STR);
/*$query->bindParam(':cin',$cin,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':service',$service,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':grade',$grade,PDO::PARAM_STR);
$query->bindParam(':cnss',$cnss,PDO::PARAM_STR);
$query->bindParam(':relequat',$relequat,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();*/
/*if($lastInsertId)
{
$msg="Employee record added Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}*/

}

    ?>
  </div>

 <div class="card-body">

    <div class="table-responsive">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> nom </th>
            <th>CIN</th>
            <th>service</th>
            <th>Grade</th>
            <th>modifier </th>
            <th>suprimer </th>
          </tr>
        </thead>
        <tbody>
     
          <tr>
            <td> 1 </td>
            <td> ahmed reda</td>
            <td> sh123</td>
            <td> informatique </td>
            <th>chef de service</th>
            <td>
                <form action="" method="post">
                    <input type="hidden" name="edit_id" value="">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> modifier</button>
                </form>
            </td>
            <td>
                <form action="" method="post">
                  <input type="hidden" name="delete_id" value="">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> suprimer</button>
                </form>
            </td>
          </tr>
        
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
