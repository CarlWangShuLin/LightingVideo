
<?php
require_once('../includes/db.php');

//require_once('../includes/head.php');

if (isset($_POST['submit'])) {
    $ac_id = $_POST['ac_id'];
    $ac_name = $_POST['ac_name'];
    $ac_password = $_POST['ac_password'];
    $ac_age = $_POST['ac_age'];
    $ac_phone = $_POST['ac_phone'];
    $ac_email = $_POST['ac_email'];
    $ac_type = $_POST['ac_type'];

    $query  = "INSERT INTO accounts (ac_id, ac_name, ac_password, ac_age, ac_phone, ac_email, ac_type) ";
    $query .= "VALUES ('$ac_id', '$ac_name', '$ac_password', '$ac_age', '$ac_phone', '$ac_email', '$ac_type') ";

    //echo $query;
    header('Location: table.php');
    mysqli_query($connection, $query);
}
?>
<div style="margin:auto;">
                        <form role="form" action="adduser.php" method="post" style="backgroud-color: white;">
                            <div class="col-lg-6" style="margin-left:25%;">
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Account id </label>
                                    <input type="number" class="form-control" name="ac_id" placeholder="<?php echo 'number' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Account name </label>
                                    <input type="text" class="form-control" name="ac_name" placeholder="<?php echo 'name' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Account password </label>
                                    <input type="text" class="form-control" name="ac_password" placeholder="<?php echo 'password' ?>">
                                </div>
                                <div class="form-group has-success" >
                                    <label class="control-label" for="inputSuccess"> Age </label>
                                    <input type="number" class="form-control" name="ac_age" placeholder="<?php echo 'age' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Phone </label>
                                    <input type="number" class="form-control" name="ac_phone" placeholder="<?php echo 'phone' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> Email </label>
                                    <input type="text" class="form-control" name="ac_email" placeholder="<?php echo 'emali' ?>">
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess"> type </label>
                                    <input type="text" class="form-control" name="ac_type" placeholder="<?php echo 'type' ?>">
                                </div>
                                <button name="submit" class="btn">Submit</button>
                            </div>
                        </form>
                        </div>
                    
<?php

mysqli_close($connection);
?> 