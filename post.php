<?php
	include "includes/header.php";
?>
<div class="container">
    <form action="includes/post.inc.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Post Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="My Blog title...">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Create</button>
    </form>
</div>

<?php
    include "includes/footer.php";
?>