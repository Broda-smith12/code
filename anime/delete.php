<?php

require("../partials/header.php");
require("../controllers/anime/ShowController.php");

?>  
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark  icon-center">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-clover fa-2x"></i></a>
        
    </nav> 
    <div class="generate-form  pt-5 pb-5" style="display: flex; align-items: center; justify-content: center; align-self: center; width: 100%; background-color: blue; height: 80vh;">
        
        <form  action="/controllers/anime/DeleteController.php"  method="POST" class="container" autocomplete="off" enctype="multipart/form-data">
            <h2 style = "text-align: center;">Are you sure you want to delete this anime record: <?= $anime->title ?></h2>
            <input type="hidden" name="id" value="<?php echo $anime->id; ?>">
            
            <a href="index.php" class="btn btn-outline-primary mt-4 p-3 w-25">cancel </a>
            <button type="submit"  name="submit" class="btn btn-danger mt-4 p-3 w-25" style="float: right;">delete</button>
        </form>
    </div>

<?php require("../partials/footer.php")?>
