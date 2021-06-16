<?php include 'filesLogic.php';?>
<?php include 'delete.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<a id="list" href="index.php">List</a>

<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
    <th>Delete</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><button class="btn"><a class="fa fa-download"  href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></button></td>
      <td><a href="delete.php?file_id=<?php echo $file['id'] ?>">Delete</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>