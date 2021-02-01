<!doctype html>
<html lang="en">
<head>
  <title>PoC for SpaceX</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Language" content="en">
	<meta name="keywords" content="SpaceX | POC" />
	<meta name="description" content="PoC for SpaceX: Develop a front-end application which would help users list and browse all launches by SpaceX program. " />
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

  <link href="styles/style.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <h1 id="test">SpaceX Launch Programs</h1>    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
      <?php include './template/filters.php';?>
      <?php include './template/cards.php';?>
    </div>
  </div>
</body>
</html>
<link href="js/main.bundle.css" rel="stylesheet">
