<?php 
  //get room details from
  include __DIR__ . '/partials/show/server.php';

  //Head html
  include __DIR__ . '/partials/templates/head.php';
?>


<!-- body -->
<header class="my-4">
  <div class="container">
    <h1 class="text-secondary text-center">Hotel Rooms</h1>
  </div>
</header>

<main>
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

    <a class="text-primary" href="index.php">Ritorna all'archivio</a>
  </div>
</main>


<!-- Footer -->
<?php 
  include __DIR__ . '/partials/templates/footer.php';
?>