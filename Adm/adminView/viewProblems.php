
<div >
  <h3>Problemas Reportados</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Usuario</th>
        <th class="text-center">Titulo</th>
        <th class="text-center">Descrição</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * FROM Contato as c INNER JOIN usuario as u ON c.id_user = u.id";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row['id_contato']?></td>
      <td><?=$row["Nome"]?></td>   
      <td><?=$row["Titulo"]?></td>   
      <td><?=$row["Texto"]?></td>   
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-danger" style="height:40px" onclick="contatoDelete('<?=$row['id_contato']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>



  
</div>
   