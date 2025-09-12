<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simple Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background-color: #1e64abff;
      color: #ffffffff;
      flex-shrink: 0;
    }
    .sidebar .nav-link {
      color: #fffefeff;
    }
    .sidebar .nav-link.active, 
    .sidebar .nav-link:hover {
      background-color: #ffffffff;
      color: #000000ff;
    }
    .content {
      flex-grow: 1;
      padding: 20px;
    }
  </style>
</head>