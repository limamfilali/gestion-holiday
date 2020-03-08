<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<?php
include('connection.php');

if( isset($_POST['DEPARTEMENT'].) &&  isset($_POST['NOM']) && isset($_POST['PRENOM']) && isset($_POST['ADRESSE']) && isset($_POST['TELEPHONE']) && isset($_POST['GRADE']) && isset($_POST['SALAIRE']) && isset($_POST['CIN']) && isset($_POST['CNSS']) && isset($_POST['RELEQUAT']) && isset($_POST['MOTPASSE']) && isset($_POST['EMAIL']))
{
$req ="UPDATE  agent SET DEPARTEMENT='".$_POST['DEPARTEMENT']."',NOM='".$_POST['NOM']."',PRENOM='".$_POST['PRENOM']."',ADRESSE='".$_POST['ADRESSE']."',TELEPHONE=:'".$_POST['TELEPHONE']."',GRADE='".$_POST['GRADE']."',SALAIRE='".$_POST['SALAIRE']."',CIN='".$_POST['CIN']."',CNSS='".$_POST['CNSS']."',RELEQUAT='".$_POST['RELEQUAT']."',MOTPASSE='".$_POST['MOTPASSE']."',EMAIL='".$_POST['EMAIL']."'";

$message =" Modification terminée !";

}
else {
echo " <script language=\"JavaScript\"> alert(\"Veuillez remplir tous les champs ...\") </script>";
}
}

?>
<html>
<head><title>Modifier le personnel </title>
<style type="text/css">
.container{
    box-shadow: 1px 1px 30px black;
    width:85%;
   	background-color: rgb(151,199,222);
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 1%;
    }
        button:hover{background-color: rgb(151,199,222);}
footer{text-align: center;margin-top: 3%; }
body{background-color: #EEE;}
.notifdiv{ border:1px  dotted black;text-align: center;margin-left:auto;margin-right:auto;margin-top:1%;background-color:#EEF;width:40%; }  
.notif,span{color:red;}
a{text-decoration: none;}
button{
  background-color: #EEF;
  text-align: right;
  width: 170px;
  height: 6%;
  background-repeat: no-repeat;
  background-position: center left;
}
header{text-align: center;background-color: #EEF;}
	     .submit{text-align: center;}
input[Value="Valider les Modifications"]{
height: 50px;
width: 190px;
background-repeat: no-repeat;
background-position: center left;
text-align: right;
background-image: url('ok.png');
background-color: #EEF;
}
  fieldset{background-color:#EEF;margin-top:0px;margin-left: auto;margin-right: auto; width: 40%;}
.confirm{
	text-align: center;
	margin-top:0px; ;
margin-bottom: 1em;
color: ;
border:1px solid #a2d246;
width: 60%;
margin-left: auto;
margin-right: auto;
background-color: #ebf8a4;
}
</style>
</head>
<body>
<div class="container">
<?php include_once('header.php');?>	
	<fieldset><legend><img src="pers.png"></legend>
<form method="post" action="MODIFIER AGENT.php">
	<?php if(isset($message)){?><p class="confirm"><em> <?php echo $message;}?></em></p>

	    <table border="0" cellspacing="5" >
        <tr><td><label>DEPARTEMENT :</label></td><td><input type="text" name="DEPARTEMENT" size="30" value ="<?php echo $reponse['DEPARTEMENT'];?>"/></tr></td>
    <tr><td><label>NOM : </label></td><td><input type="text" name="NOM" size="30" value ="<?php echo $reponse['NOM'];?>"  /></tr></td>
    <tr><td>	<label>PRENOM :</label></td><td><input type="text" name="PRENOM" size="30" value ="<?php echo $reponse['PRENOM'];?>"  /></tr></td>
   <tr><td>	<label>CIN :</label></td><td><input type="text" name="CIN" size="30" value ="<?php echo $reponse['CIN'];?>"/></tr></td>
   <tr><td>	<label>GRADE :</label></td><td><input type="text" name="GRADE" size="30" value ="<?php echo $reponse['GRADE'];?>"/></tr></td>
   <tr><td>	<label>CNSS :</label></td><td><input type="text" name="CNSS"  value ="<?php echo $reponse['CNSS'];?>"/></tr></td>
   <tr><td>	<label>Tél :</label></td><td><input type="tel" name="TELEPHONE" size="30" value ="<?php echo $reponse['TELEPHONE'];?>" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/></tr></td>
   <tr><td>	<label>ADRESSE :</label></td><td><input type="text" name="ADRESSE" size="30" value ="<?php echo $reponse['ADRESSE'];?>"/></tr></td>
   <tr><td>	<label>Email</label></td><td><input type="email" name="EMAIL" size="30" value ="<?php echo $reponse['EMAIL'];?>"/></tr></td>
   <tr><td>	<label>RELEQUAT</label></td><td><input type="number" name="RELEQUAT" size="30" min="0"  value ="<?php echo $reponse['RELEQUAT'];?>"/></tr></td>
   <tr><td>	<label>MOTPASSE</label></td><td><input type="text" name="MOTPASSE"   value ="<?php echo $reponse['MOTPASSE'];?>"/></tr></td>
	  

	 <tr class="submit"><td colspan="2"><input type="submit" Value="Valider les Modifications" /></tr></td>
</table>
</form>
</fieldset>
</div>
</body>
</html>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>



