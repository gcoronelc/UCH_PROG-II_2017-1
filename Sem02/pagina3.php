<!DOCTYPE html> 
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
    <h1>SERIE</h1>
    <table>
      <thead>
        <tr>
          <th>n</th>
          <th>valor</th>
        </tr>
      </thead>
      <tbody>
        <?php for($i = 0; $i < $n; $i++){ ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <td><?php echo $repo[$i]; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
