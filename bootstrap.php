<?php
include("db.php");
$sql = "SELECT * FROM msg ORDER BY id desc";
$data = read($pdo, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <title>留言板SUFE-李晨曦</title>
</head>

<body>
  <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">留言板SUFE-李晨曦</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <p class="lead">持续更新中……</p>
      </div>
    </div>
    <form action="save.php" method='POST'>
      <div class='row'>
        <div class='col-12'>
          <div class='form-group'>
            <textarea name='content' class="form-control" rows='4'></textarea>
          </div>
        </div>

        <div class="col-3">
          <div class="form-group">
            <input name='username' class='username form-control' type='text' />
          </div>
        </div>
        <div class="col-9 d-flex">
          <div class='form-group ml-auto'>
            <input class='btn btn-primary' type='submit' value='提交' />
          </div>
        </div>

      </div>
    </form>

    <div class="row">
      <div class="col-12">

        <?php
        foreach ($data as $key => $value) {
        ?>

          <div class='border rounded p-2 mb-2'>
            <div class="text-primary">
              <p><?php echo $value['username'] ?></p>
            </div>
            <pre><p><?php echo $value['content'] ?></p></pre>
          </div>

        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <script type="text/javascript" color="0,0,255" opacity='0.7' zIndex="-2" count="350" src="canvas-nest.js/dist/canvas-nest.js"></script>
</body>

</html>