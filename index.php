<?php 
  include __DIR__ . '/partials/home/server.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';
?>


<!-- body -->
<header class="my-4">
  <div class="container">
    <h1 class="text-primary text-center">Hotel Rooms</h1>
  </div>
</header>



<main class="container">
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Floor</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php 
          if(!empty($rooms)){
              foreach($rooms as $room){ ?>
                <tr>
                  <td><?php echo $room['id']; ?></td>
                  <td><?php echo $room['room_number']; ?></td>
                  <td><?php echo $room['floor']; ?></td>
                  <td>
                    <a class="text-success" href="./show.php?id=<?php echo $room['id']; ?>">View</a>
                  </td>
                  <td class="text-primary">Update</td>
                  <td class="text-danger">Delete</td>
                </tr>

              <?php }
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>