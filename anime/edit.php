<?php 
require("../partials/header.php");
require("../controllers/anime/ShowController.php");
require("../utilities/helper.php");
?>
<style>
    label{
        font-size: 1.3rem;
    }
</style>
        
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark  icon-center">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-clover fa-2x"></i></a>
        
    </nav> 
    <div class="generate-form  pt-5 pb-5" style="display: flex; align-items: center; justify-content: center; align-self: center; width: 100%; background-color: blue;">


        <form action="/controllers/anime/EditController.php" method="POST" class="container" autocomplete="off" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $anime->id; ?>">
            <label for="">Name</label>
            <input type="text" name="name" id="name"  value="<?= $anime->name; ?>">
            <label for="image">image : </label>
            <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .jfif"><br>
            <label for="">Title</label>
            <input type="text" name="title" id="title"  value="<?= $anime->title; ?>">
            <label for="">author</label>
            <input type="text" name="author" id="author"  value="<?= $anime->author; ?>">
            <label for="">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" style="width: 100%;"><?= $anime->description; ?></textarea>         
            <a href="index.php" class="btn btn-danger mt-4 p-3 w-25">cancel </a>
            <button type="submit"  name="submit" class="btn btn-primary mt-4 p-3 w-25" style="float: right;">Update</button>
        </form>
    </div>

<?php require("../partials/footer.php")?>
