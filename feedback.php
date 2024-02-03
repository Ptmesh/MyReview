<?php 
require_once "inc/db.php";

$sql = 'SELECT * FROM clients';
$result = $pdo->query($sql);
$feedback = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<?php require "inc/header.php"?>

<div class="container p-3 mt-3 d-flex justify-content-center">
<h3>Feedback form my beloved clients..</h3>
</div>


<?php if (empty($feedback)) : ?>
    <div class="card m-5">
  <div class="card-body">
    Currently there are no feedbacks!
  </div>
</div>
<?php endif ?>

<div class="container gap-4 p-5 d-flex flex-wrap">
<?php foreach ($feedback as $item) : ?>
<div class="card p-2" style="width: 18rem;">
<div class="card-body ">
<h5 class="card-title p-1"> <?php echo $item['username']; ?></h5>
<h6 class="card-subtitle mb-2 p-1 text-body-secondary"><?php echo $item['email']; ?></h6>
<p class="card-text p-1"> <?php echo $item['review']; ?></p>
</div>
</div>
<?php endforeach; ?>

</div>
<?php include "inc/footer.php"?>