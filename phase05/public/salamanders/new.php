<?php 

require_once('../../private/initialize.php');

if(is_post_request()) {

  $salamander = [];
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $new_id));
  }
  else {
    $errors = $result;
  }
}

else {
  // display the blank form
}

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
}
elseif($test == '500') {
  error_500();
}
elseif($test == 'redirect') {
  redirect_to(url_for('/salamanders/index.php'));
}

$page_title = 'Add New Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>


<div id = "content">

  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Salamanders</a>

  <h1>Create Salamander</h1>

  <?php echo display_errors($errors); ?>

  <form action="<?php echo url_for('/salamanders/new.php'); ?>" method="post">
    <label for="name"><p>Name:<br>
    <input type="text" id="name" name="name"></p></label>

    <label for="habitat"><p>Habitat:<br>
    <textarea id="habitat" name="habitat" rows="4" cols="50"></textarea></p></label>

    <label for="description"><p>Description:<br>
    <textarea id="description" name="description" rows="4" cols="50"></textarea></p></label>
    <input type="submit" value="Create Salamander">
  </form>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
