<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle)?$pageTitle:'Anna Prithibi Seed Farm'; ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<div class="container">
<a class="navbar-brand fw-bold" href="index.php">Anna Prithibi</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link" href="pages/products.php">Products</a></li>
<li class="nav-item"><a class="nav-link" href="pages/about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="pages/contact.php">Contact</a></li>
<li class="nav-item"><a class="btn btn-warning ms-2" href="admin/login.php">Admin</a></li>
</ul>
</div>
</div>
</nav>