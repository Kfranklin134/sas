<?php 

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];

if(is_post_request()) {
  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $id));

}

else {
  $salamander = find_salamander_by_id($id);
}

include(SHARED_PATH . '/salamander-header.php'); 

?>

<div id = "content">

  <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
    <label for="name"><p>Name:<br>
    <input type="text" name="name" value="<?php echo h($salamander['name']); ?>"></p></label>

    <label for="habitat"><p>Habitat:<br>
    <textarea id="habitat" name="habitat" rows="4" cols="50"><?php echo h($salamander['habitat']); ?></textarea></p></label>

    <label for="description"><p>Description:<br>
    <textarea id="description" name="description" rows="4" cols="50"><?php echo h($salamander['description']); ?></textarea></p></label>

    <input type="submit" value="Edit Salamander">
  </form>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
