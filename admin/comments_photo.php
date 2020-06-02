<?php
include ('includes/header.php');
/*if(!$session->is_signed_in()){
    redirect('login.php');
}*/

if(empty($_GET['id'])){
    redirect("photos.php");
}
$comments = Comment::find_the_comments($_GET['id']);
$photo = Photo::find_by_id($_GET['id']);
?>
<?php
include ('includes/sidebar.php');
include ('includes/content-top.php');
?>

<!-- hier komt het overzicht van alle foto's -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>COMMENTS <?php echo $photo->title; ?></h2>
            <a href="../photo.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary rounded-0"><i class="fas fa-comments"></i> Add Comment</a>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Body</th>
                    <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                <!-- start foreach -->
                <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?php echo $comment->id; ?></td>
                        <td><?php echo $comment->author; ?></td>
                        <td><?php echo $comment->body; ?></td>
                        <td><a href="delete_comment_photo.php?id=<?php echo $comment->id; ?>" class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                <!-- einde foreach -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include ('includes/footer.php');
?>