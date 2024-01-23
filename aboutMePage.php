<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Website</title>

    <!-- Link to CSS and JS: -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="universal.css">
    <script src="applications.js"></script>
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
                <a href="#" class="sidebarItem sidebarBtn">Project 2</a>
            </div>
        </div>
        <a href='aboutMePage.php' class="sidebarItem sidebarBtn">About Me</a>
    </div>

    <!-- Page -->
    <div>
        <button id="sidebarOpenBtn" onclick="animate_sidebar()" class="sidebarOpenBtn xlarge"><span>&#9776;</span></button>
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

    <div>
        <h1 class="white">About Me</h1>
        <p class="white large">Hi! I hope you've enjoyed my portfolio website thus far.</br></br>
            If you're looking for my technical and career experience, you can find that here on my <a href="resumePage.php" class="yellow">resume page</a>.
            Otherwise, let me introduce myself a little further beyond the logistical details.</br></br>
            My name is Rhiannon Lau, I am currently majoring in computer science at a Canadian university.
            I first thought to create a website like this in early 2023,
            but it was not until early 2024 when I discovered the how fun and satisfying it is to make a website during one of my courses that I began the actual design and creation,
            and I have been consistently updating and maintaining it since.
            It was during this time when I also began taking on more personal and academic projects that I thought were fit to be shown in a portfolio such as this,
            such as the <a href="" class="yellow">Task Manager project</a> and the <a href="" class="yellow">Singing Willow Farm Website commission</a>.</br></br>
            Both my parents had a passion for computer science, and they introduced me to my first coding application when I was 8: Scratch.
            Scratch was as much a coding application as it was a game to me, and it was the first step into a much larger world that I've become so passionate about.</br></br>
            When I'm not coding or studying, some other hobbies I love to do in my free time include gaming, cooking and baking, sewing clothes, and reading.</br></br>
            Here are some fun facts about me:</br>
        </p>
            <ul class="white large" style="list-style-type:disc; padding-left: 100px;">
                <li>In addition to English, I speak French, Cantonese, and I'm learning Korean</li>
                <li>I have a black belt in judo</li>
                <li>I am an NLS-certified lifeguard</li>
                <li>I finished RCM grade 8 piano</li>
            </ul>
        <p class="white large">
            Thank you for taking the time to review my portfolio.
            Please feel free to look into my Github and LinkedIn using the icons at the top right, and if you would like to contact me, I am always reachable through LinkedIn at any time.
        </p>
    </div>
</body>
</html>