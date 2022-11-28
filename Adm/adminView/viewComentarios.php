
<div >
  <h2>Comentários</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Usuário</th>
        <th class="text-center">Texto</th>
        <th class="text-center">Data</th>
        <th class="text-center" colspan="2">Ação</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from comentarios";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$row["id"]?></td>
      <td><?= $row['user_id']?></td>      
      <td><?=$row["Texto"]?></td>     
      <td><?=$row["DataComent"]?></td>     
      <td><button class="btn btn-danger" style="height:40px" onclick="comentarioDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
