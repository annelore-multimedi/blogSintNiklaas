<?php
include ('includes/header.php');
/*if(!$session->is_signed_in()){
    redirect('login.php');
}*/

$user = new User();
if(isset($_POST['submit'])){
    //user toevoegen aan DB
    $user->username = $_POST['username'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->password = $_POST['password'];
    $user->set_file($_FILES['file']);

    $user->save_user_and_image();
}

/*if(empty($_GET['id'])){
    redirect('photos.php');
}else{
    $photo = Photo::find_by_id($_GET['id']);
    if(isset($_POST['update'])){
        if($photo){
            $photo->title = $_POST['title'];
            $photo->caption = $_POST['caption'];
            $photo->description = $_POST['description'];
            $photo->alternate_text = $_POST['alternate_text'];
            //$photo->type = $_POST['type'];
            //$photo->size = $_POST['size'];
            $photo->update();
        }
    }
}*/
?>
<?php
include ('includes/sidebar.php');
include ('includes/content-top.php');
?>

<!-- hier komt het overzicht van alle foto's -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Welkom op de add user pagina</h2>
            <form action="add_user.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" class="form-control" value="<?php //echo $photo->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="first_name" class="form-control" value="<?php //echo $photo->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name:</label>
                        <input type="text" name="last_name" class="form-control" value="<?php //echo $photo->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control" value="<?php //echo $photo->title ?>">
                    </div>
                    <div class="form-group">
                        <label for="file">User image:</label>
                        <input type="file" name="file" class="form-control" value="<?php //echo $photo->title ?>">
                    </div>

                        <input type="submit" value="Add user" name="submit" class="btn btn-primary btn-lg">

                </div>
            </form>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>