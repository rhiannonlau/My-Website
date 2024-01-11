<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website</title>

    <!-- Link to CSS and JS: -->
    <link rel="stylesheet" href="index.css">
    <script src="applications.js"></script>
</head>
<body>
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar sidebarFromLeft" style="display:none">
        <button onclick="close_sidebar(); show_sidebar_button()" class="sidebarItem sidebarCloseBtn large">Close &times;</button>
        <a href='resumePage.php' class="sidebarItem sidebarBtn">Resume</a>
        <div id="drop" class="sidebarDropdown">
            <button class="sidebarDropdownBtn" href="projectsPage.php">Projects <span>&#x25BC;</span></button>
            <div id="projectsDrop" class="sidebarDropdownContent">
                <a href="#" class="sidebarItem sidebarBtn">Project 1</a>
                <a href="#" class="sidebarItem sidebarBtn">Project 2</a>
            </div>
        </div>
        <a href='aboutMePage.php' class="sidebarItem sidebarBtn">About Me</a>
    </div>

    <!-- Page -->
    <div>
        <button id="sidebarOpen" onclick="open_sidebar()" class="sidebarOpenBtn xlarge"><span>&#9776;</span></button>
        <h1 class="white">Rhiannon Lau</h1>
    </div>

    <div>
        <h2 class="white">Current project</h2>
        <div>

        </div>
    </div>
</body>
</html>