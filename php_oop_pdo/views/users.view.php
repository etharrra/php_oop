<!DOCTYPE html>
<html>
<head>
  <title>Users Page</title>
</head>
<body>
  <h1>All Users</h1>

  <table border="1" cellpadding="10" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($users as $user): ?>
        <tr>
          <td>1</td>
          <td><?=$user->name?></td>
          <td><?=$user->email?></td>
          <td><?=$user->phone?></td>
          <td><?=$user->address?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  
</body>
</html>