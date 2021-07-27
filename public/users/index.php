<!DOCTYPE html>
<html lang="en">
<head>
  <title>User</title>
</head>
<body>
  <h1>Data User</h1>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php
      require __DIR__.'/../../app/model/model_users.php';
      $users = new Users();
      $no = 1;
      foreach($users->getUsers() as $data) {
        echo "
          <tr>
            <td>$no</td>
            <td>$data->nama</td>
            <td>$data->tanggal_lahir</td>
            <td>$data->alamat</td>
          </tr>
        ";
        $no++;
      }
      ?>
    </tbody>
  </table>
</body>
</html>