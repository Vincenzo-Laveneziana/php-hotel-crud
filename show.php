<?php 
  //get room details from
  include __DIR__ . '/partials/show/server.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';

  //Header
  include __DIR__ . '/partials/templates/header.php';
?>


<!-- main -->

<main>
  <h1 class="text-secondary text-center my-4">Hotel Rooms</h1>
  <div class="container d-flex flex-column align-items-center">
    <table class="table col-md-6">

      <thead class="text-center">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Room number</th>
          <th scope="col">Floor</th>
          <th scope="col">Beeds</th>
        </tr>
      </thead>

      <tbody class="text-center">
        <tr>
          <th><?php echo $room['id'] ?></th>
          <td><?php echo $room['room_number'] ?></td>
          <td><?php echo $room['floor'] ?></td>
          <td><?php echo $room['beds'] ?></td>
        </tr>
      </tbody>
    </table>
    <form action="partials/delete/server.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $room['id']; ?>">
      <input class="btn btn-danger" type="submit" value="Delete">
    </form>
  </div>
</main>


<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>