<?php
	include "includes/header.php";
?>
<div class="container">
    
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Post Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="My Blog title...">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Body</button>
    </form>
</div>

<?php
    include "includes/footer.php";
?>