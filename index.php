<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website</title>

    <!-- Link to CSS and JS: -->
    <link rel="stylesheet" href="homePage.css">
    <script src="applications.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar" style="display:none">
        <button onclick="close_sidebar()">Close &times;<button>
        <a href="#" class="sidebarButton">Resume</a>
        <a href="#" class="sidebarButton">Projects</a>
        <a href="#" class="sidebarButton">About Me</a>
    </div>

    <!-- Page -->
    <div>
        <button onclick="open_sidebar()">☰</button>
    </div>
</body>
</html>