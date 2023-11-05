<?php 

require_once('../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}

$id = $_GET['id'];
$salamanderName = '';

if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';
  echo "Salamander name: " . $salamanderName;
}

include(SHARED_PATH . '/salamander-header.php'); 

?>

<div id = "content">

<h1>Stub for Delete Salamander</h1>

</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
