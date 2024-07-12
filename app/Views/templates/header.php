<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900|Oswald:400,700" rel="stylesheet">
  <link rel="stylesheet" href="/aseets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/aseets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/aseets/css/magnific-popup.css">
  <link rel="stylesheet" href="/aseets/css/jquery-ui.css">
  <link rel="stylesheet" href="/aseets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/aseets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/aseets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/aseets/css/aos.css">
  <link rel="stylesheet" href="/aseets/css/fancybox.min.css">
  <link rel="stylesheet" href="/aseets/css/style.css">
  <title><?= $title ?></title>
  <style>
    .sidebar {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      padding: 15px 8px 15px 16px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .content {
      margin-left: 260px; /* Adjust this value to ensure there's enough space for the sidebar */
      padding: 20px;
    }
    body {
      background-color: #f8f9fa;
    }
    .table {
      font-size: 0.875rem; /* Ukuran font lebih kecil */
    }
    .table thead th {
      background-color: #343a40;
      color: #fff;
      padding: 0.5rem; /* Padding lebih kecil */
    }
    .table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .table td, .table th {
      text-align: center;
      vertical-align: middle;
      padding: 0.5rem; /* Padding lebih kecil */
    }
    .btn {
      margin: 2px;
    }
    .container {
      padding-top: 20px;
    }
    #map {
      height: 500px;
      margin-bottom: 20px;
    }
    .table td:nth-child(2), .table th:nth-child(2) {
      width: 25%;
    }
  </style>
</head>
<body>
  <div class="site-wrap">
    <div class="sidebar">
      <a href="/dashboard">Dashboard</a>
      <a href="/rumahsakit">Rumah Sakit</a>
      <a href="/logout">Logout</a>
    </div>
    <div class="content">
