<?php require_once('../../private/initialize.php'); 

  $result = find_all_salamanders();

$page_title = 'Salamanders'; 
include(SHARED_PATH . '/salamander-header.php'); 

?>

<h1>Salamanders</h1>

  <a href="<?= url_for('/salamanders/new.php'); ?>">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Habitat</th>
    <th>Desc</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php while($salamander = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?= h($salamander['id']); ?></td>
    	    <td><?= h($salamander['name']); ?></td>
          <td><?= h($salamander['habitat']); ?></td>
          <td><?= h($salamander['description']); ?></td>
          <td><a href="<?= url_for('salamanders/show.php?id=' . h(u($salamander['id']))); ?>">View</a></td>
          <td><a href="<?= url_for('salamanders/edit.php?id=' . h(u($salamander['id']))); ?>">Edit</a></td>
          <td><a href="<?= url_for('salamanders/delete.php?id=' . h(u($salamander['id']))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php mysqli_free_result($result); ?>

<p>Thanks to <a href="https://herpsofnc.org">Amphibians and Reptiles of North Carolina</a></p>
<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
