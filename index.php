<?php include "inc/header.php"?>

<!-- Hero -->
<div class="container-xxl d-flex justify-content-center align-items-center m-3">
  <div class="container col-md-7 p-5">
    <img src="material/review.svg" alt="">
  </div>
  <div class="container col-md-5 p-5"> 
    <h3 class="p-3">What do you think about my work?</h3>
    <form action="inc/submit.php" method="POST">
      <div class="mb-3 p-3">
        <label for="nameinput" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameinput" name="username">
      </div>
      <div class="mb-3 p-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="form-floating p-3">
        <h5>Review</h5>
        <textarea class="form-control" name="review" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mx-3">Submit</button>
    </form>
  </div>
</div>

<?php include "inc/footer.php"?>
