
<div >
  <h3>Posts</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Titulo</th>
        <th class="text-center">Texto</th>
        <th class="text-center" colspan="2">Ação</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from post";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["Titulo"]?></td>  
      <td><?= $row['Texto'] ?></td> 
      <!-- <td><button class="btn btn-primary" >Edit</button></td> -->
      <td><button class="btn btn-danger" style="height:40px" onclick="postDelete('<?=$row['id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Criar Post
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Novo Post</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addPostController.php" method="POST">
            <div class="form-group">
              <label for="c_name">Titulo do post:</label>
              <input type="text" class="form-control" name="Title" required>
            </div>
            <div class="form-group">
              <textarea name="Text" id="" cols="40" rows="5" placeholder="Texto"></textarea>
            </div>
            <div class="form-group">
            <select name="Lang" required>
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

  
</div>
   