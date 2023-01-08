<?php 
require("../partials/header.php");
require("../models/Anime.php");
?>

<div class="header">
    <div class="header-top p-3" style="display: flex; background-color: rgb(0, 0, 187); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h1 class="text-white">ANIME</h1>
        <a href="create.php" class="ml-auto">
            <button class="btn btn-primary mt-2 mr-1" style=" border-radius: 10px; width: 93%;">
                Generate
            </button>

        </a>
    </div>
    <div class="container-fluid mt-4" style="overflow-x: scroll;">           
        <table class="table table-bordered" >
          <thead >
            <tr>
              <th>Name</th>
              <th>image</th>
              <th>Title</th>
              <th>Author</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>            
            
            <?php foreach(Anime::all() as $anime) : ?>
                <tr>
                  <td><?= $anime->name ?></td>
                  <td><img src='../img/<?= $anime->image ?>' width = 50 height = 50 title='<?= $anime->image ?>'></td>
                  <td><?= $anime->title ?></td>
                  <td><?= $anime->author ?></td>
                  <td><?= $anime->description ?></td>
                  <td>
                    <a href='edit.php?id=<?= $anime->id ?>' type='button' class='btn btn-primary btn-sm'>Edit</a>
                    <a href='delete.php?id=<?= $anime->id ?>' type='button' class='btn btn-danger btn-sm'>Delete</a>
                  </td>
                </tr>
            <?php endforeach; ?>
            

          </tbody>
        </table>
      </div>
</div>



<?php 

require("../partials/footer.php");
?>
