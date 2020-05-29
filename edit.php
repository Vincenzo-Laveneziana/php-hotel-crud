<?php 
  //get room details from
  include_once __DIR__ . '/partials/update/server-edit.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';

  //Header
  include __DIR__ . '/partials/templates/header.php';
?>


<!-- main -->
<?php //var_dump($room); ?>
<main>
  <h1 class="text-secondary text-center my-4">Edit Rooms</h1>
  <div class="container d-flex flex-column align-items-center ">

    <form class="col-7" action="partials/update/server-update.php" method="POST">
      <div class="form-group ">
        <label for="room_number">Room Number</label>
        <input class="form-control" type="number" name="room_number" id="room_number" value="<?php echo $room['room_number']; ?>">
      </div>

      <div class="form-group">
        <label for="beds">Beds Number</label>
        <input class="form-control" type="number" name="beds" id="beds" value="<?php echo $room['beds']; ?>">
      </div>

      <div class="form-group">
        <label for="floor">Floor</label>
        <input class="form-control" type="number" name="floor" id="floor" value="<?php echo $room['floor']; ?>">
      </div>

      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
        <input class="btn btn-primary" type="submit" value="Save">
      </div>

    </form>
    
  </div>
</main>


<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>