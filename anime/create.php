<?php
require("../partials/header.php");
?>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark  icon-center">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-clover fa-2x"></i></a>

</nav>

<div class="generate-form  pt-5 pb-5"
    style="display: flex; flex-direction: column; align-items: center; justify-content: center; align-self: center; width: 100%; background-color: blue;">

    <?php 
        if( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert dismissible fade show' role='alert' >
                <strong>$errorMessage</strong>
                <button type='button' class='close' data-dismiss='alert' aria-label='close'>&times;</button>
            </div>
            ";
        }
        ?>
    <form action="/controllers/anime/CreateController.php" method="post" autocomplete="off"
        enctype="multipart/form-data" class="container">
        <label for="">name</label>
        <input type="text" name="name" id="name">
        <label for="image">image : </label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png, .jfif" value=""><br>
        <label for="">Title</label>
        <input type="text" name="title" id="title">
        <label for="">author</label>
        <input type="text" name="author" id="author">
        <label for="">Description</label>
        <textarea name="word" id="word" cols="30" rows="10" style="width: 100%;"></textarea>
        <a href="index.php" class="btn btn-danger mt-4 p-3 w-25">cancel </a>
        <button type="submit" name="submit" class="btn btn-primary mt-4 p-3 w-25" style="float: right;">submit</button>
    </form>
    <br>
</div>