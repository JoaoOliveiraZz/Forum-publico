<div>
  <h2>Todos os Usuários</h2>
  <!-- Trigger the modal with a button -->

  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Usuário </th>
        <th class="text-center">Login</th>
        <th class="text-center">Logoff</th>
        <th class="text-center">Status</th>
        <th class="text-center">Deletar</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * FROM Log as l INNER JOIN usuario as u ON l.user_id = u.id";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>
        <tr>
          <td><?= $row['id_log'] ?></td>
          <td><?= $row["Nome"] ?></td>
          <td><?= $row["login"] ?></td>
          <td><?= $row["logoff"] ?></td>
          <td><?php if($row['logoff'] == "0000-00-00 00:00:00"){
                echo 'Online';
          }else{
                echo 'Offline';
          }
          ?></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="logDelete('<?= $row['id_log'] ?>')">Delete</button></td>
        </tr>
    <?php
        $count = $count + 1;
      }
    }
    ?>
  </table>


  </div>

