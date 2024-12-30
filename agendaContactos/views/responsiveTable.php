
<div class="tableContainer">
<section id="tableHeader" class="flexRow">
  <h1 class="heading">Contactos</h1>
  

</section>

<table class="table">
<thead class="tableHeader">
<tr>
<th class="tableTh">Id</th>
<th class="tableTh">Nome</th>
<th class="tableTh">Número</th>
<th class="tableTh">Email</th>
<th class="tableTh">Acções</th>

</tr>
</thead>

<?php 
require_once "../controllers/contactController.php";
$contactController= new ContactController();
$userId=$_SESSION["userId"];
$arrayContacts=null;

if($userId){
    $arrayContacts=$contactController->getAllContacts($userId);
    $_SESSION["arryContacts"] = $arrayContacts;
}
?>

<tbody class="tableBody">
<?php 
foreach($arrayContacts as $data){
    echo "<tr>";
    echo "<td dataLabel='Id' class='tableData'>".$data['contactId']."</td>";
    echo "<td dataLabel='Nome' class='tableData'>".$data['contactName']."</td>";
    echo "<td dataLabel='Número' class='tableData'>".$data["phoneNumber"]."</td>";
    echo "<td dataLabel='Email' class='tableData'>".$data["email"]."</td>";
    echo "<td dataLabel='Acções' class='tableData'>  <div id='containerButtons'>
    <a class='buttonTable button buttonEdit' href='editContact.php?id=$data[contactId]'>Editar</a>  
    <a class='buttonTable button'  href='../includes/deleteContactHandler.php?id=$data[contactId]' >Deletar</a>
    </div></td>";
    echo "</tr>";
                }
?>

</tbody>

</table>

 <!--The alert element
 <section id="deleteContact" class="flexColumn ">
    <div id="containerMessage">
      <p class="paragraph">Apagar contacto?
      </p>
    </div>

<div class="flexRow" id="containerButton">
   <a class="button" id="buttonYes" href='../includes/deleteContactHandler.php?id='>Sim</a>
   <a class="button buttonRed" id="buttonNo" href="viewContacts.php">Nao</a>
  </div>
  </section>
-->

</div>