<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website</title>

    <!-- Link to CSS and JS: -->
    
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="universal.css">
    <link rel="stylesheet" href="projectsPage.css">
    <script src="applications.js"></script>
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar" style="display: none;">
        <button onclick="animate_sidebar()" class="sidebarItem sidebarCloseBtn large">Close &times;</button>
        <a href='index.php' class="sidebarItem sidebarBtn">Home</a>
        <a href='resumePage.php' class="sidebarItem sidebarBtn">Resume</a>
        <div id="drop" class="sidebarDropdown">
            <button class="sidebarDropdownBtn" href="projectsPage.php">Projects <span>&#x25BC;</span></button>
            <div id="projectsDrop" class="sidebarDropdownContent">
                <a href="projectsPage.php" class="sidebarItem sidebarBtn">All Projects</a>
                <a href="#" class="sidebarItem sidebarBtn">Project 1</a>
                <a href="projectTaskManager.php" class="sidebarItem sidebarBtn">Task Manager</a>
            </div>
        </div>
        <a href='aboutMePage.php' class="sidebarItem sidebarBtn">About Me</a>
    </div>

    <!-- Header content -->
    <div style="display: inline-flex;"> <!-- border: 3px solid #73AD21;-->
        <button id="sidebarOpenBtn" onclick="animate_sidebar()" class="sidebarOpenBtn xlarge"><span>&#9776;</span></button>
        <p style="color: #DDDDDD; padding-left: 10px;"><b><a style="color: #DDDDDD" href="projectsPage.php">Projects</a></b></p>
        <a target="_blank" rel="noopener noreferrer" href="https://github.com/rhiannonlau" style="position: absolute; top: 8px; right: 130px"> <!-- target="_blank" opens link in new tab -->
            <img src="res/github_logo_transparent.png" alt="Link to my Github"
                style="
                padding: 5px;
                width: 100px;
                -webkit-filter: invert(100%);
                filter: invert(100%) brightness(85%);">
        </a>
        <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/rhiannon-lau-410362273/" style="position:absolute; padding-top: 20px; right: 16px">
            <img src="res/linkedin_logo_transparent.webp" alt="Link to my LinkedIn"
                style="
                width: 100px;
                filter: brightness(85%);">
        </a>
    </div>

    <!-- Page -->
    <div style="
        width: 97%;
        display: inline-flex;
        margin-top: 50px;
        align-items: center;
        justify-content: space-between;">
        <h1 class="white">Projects</h1>
        <div>
            <div class="searchbarContainer" style="margin-right: 10px; display: inline-flex">
                <input placeholder="Search..." id="searchBar" name="searchBar" type="text" style="font-size: 18px;">
                <i class="fa-solid fa-magnifying-glass glass"></i>
            </div>
            <div id="drop" class="sidebarDropdown" style="margin-left: 10px;">
                <button class="sidebarDropdownBtn" style="height: 35px; width: 150px">Display by <span>&#x25BC;</span></button> <!-- the height specifier is necessary here instead of css-->
                <div id="projectsDrop" class="sidebarDropdownContent">
                    <button id="dispAlph" class="sidebarItem sidebarBtn" style="width: 150px">Alphabetical</button>
                    <button id="dispRevAlph" class="sidebarItem sidebarBtn" style="width: 150px">Reverse alphabetical</button>
                    <button id="dispMRec" class="sidebarItem sidebarBtn" style="width: 150px">Most recent</button>
                    <button id="dispLRec" class="sidebarItem sidebarBtn" style="width: 150px">Least recent</button>
                    <!-- try to make most recent the default -->
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="data">
            <div class="body">
                <div id="root" style="margin-left: 35px"></div>
            </div>
        </div>
    </div>
    <script src="searchBar.js"></script>

    <!-- all projects, maybe displayed using cards. user has option to search for key words or filter in a certain order-->
</body>
</html>