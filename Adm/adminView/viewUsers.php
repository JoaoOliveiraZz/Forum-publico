<div>
  <h2>Todos os Usuários</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Novo usuário
  </button>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nome </th>
        <th class="text-center">Email</th>
        <th class="text-center">Idade</th>
        <th class="text-center">Linguage Favorita</th>
        <th class="text-center">Deletar</th>
        <th class="text-center">Editar</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * FROM usuario WHERE id != 1";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td><?= $row["Nome"] ?></td>
          <td><?= $row["Email"] ?></td>
          <td><?= $row["Idade"] ?></td>
          <td><?= $row["FavLinguagem"] ?></td>
          <td><button class="btn btn-danger" style="height:40px" onclick="userDelete('<?= $row['id'] ?>')">Delete</button></td>
          <td><button type="button" class="btn btn-info" style="height:40px">Update</button></td>
        </tr>
    <?php
        $count = $count + 1;
      }
    }
    ?>
  </table>


  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Novo Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addUserController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Nome</label>
              <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group">
              <label for="c_name">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="c_name">Senha</label>
              <input type="password" class="form-control" name="senha" required>
            </div>
            <div class="form-group">
              <label for="c_name">Idade</label>
              <input type="number" class="form-control" name="idade" required>
            </div>
            <div class="form-group">
              <select name="lang" required>
                <option value="">Linguagem</option>
                <option value="Js">Js</option>
                <option value="PHP">PHP</option>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="C#">C#</option>
                <option value="Ruby">Ruby</option>
                <option value="Sql">Sql</option>
              </select>
            </div>

            <div class="form-group">
              <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
              </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>

  <!-- #######################################Modal Edit########################################################### -->

  <div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Novo Usuário</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addUserController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Nome</label>
              <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="form-group">
              <label for="c_name">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <label for="c_name">Senha</label>
              <input type="password" class="form-control" name="senha" required>
            </div>
            <div class="form-group">
              <label for="c_name">Idade</label>
              <input type="number" class="form-control" name="idade" required>
            </div>
            <div class="form-group">
              <select name="lang" required>
                <option value="">Linguagem</option>
                <option value="Js">Js</option>
                <option value="PHP">PHP</option>
                <option value="C++">C++</option>
                <option value="Python">Python</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="C#">C#</option>
                <option value="Ruby">Ruby</option>
                <option value="Sql">Sql</option>
              </select>
            </div>

            <div class="form-group">
              <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add Category</button>
              </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>

