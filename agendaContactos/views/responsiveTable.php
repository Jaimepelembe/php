
<div class="tableContainer">
<section id="sectionTable" class="flexRow">
  <h1 class="heading">Contactos</h1>
  <div class="boxForm">
      <form  id="searchForm" action="../includes/searchContactHandler.php" method="post" tabindex="0" autocomplete="on"  onsubmit="return validateSearchContact()">
        <div id="searchInput" class="inputBox flexRow">
          <input
            type="text"
            name="searchBox"
            id="searchBox"
            class="input required"
            autocomplete="name"
          />
          <button  id="buttonSearch" class="button" type="submit">Pesquisar</button>
          </div>
</form>
</div>
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

if($userId and empty($_SESSION["contactsFounded"])){
    $arrayContacts=$contactController->getAllContacts($userId);
    $_SESSION["arryContacts"] = $arrayContacts;
}
else{
$arrayContacts=$_SESSION["contactsFounded"];
unset($_SESSION["contactsFounded"]);
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

</div>