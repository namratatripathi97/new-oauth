<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: absolute;
  z-index: 1;
  top: 55px;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>
<body>

        <main class="py-4">
<div class="sidenav">
  <a href="{{ url('api/view-client') }}">View Client</a>
  <a href="{{ url('api/view-bullhorn') }}">View Bullhorn</a>
  <a href="{{ url('api/edit-bullhorn') }}">Edit Bullhorn</a>
  <a href="{{ url('viewFeed') }}">View Feed</a>
</div>
</body>
</html>
