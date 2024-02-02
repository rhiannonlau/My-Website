function open(projLink) {
    window.location.href = projLink;
}

pathname = window.location.pathname;

const project=[
    {
        id: 0,
        image: 'res/cat.png',
        title: 'Task Manager Website',
        description: 'Skills: HTML, PHP, JavaScript, CSS, Selenium',
        link: "projectTaskManager.php"
    },
    {
        id: 1,
        image: 'res/cat.png',
        title: 'Project 2',
        description: 'N/A',
        link: "#"
    }
]

function sortAlphabetically(array) {
    return array.slice().sort((a, b) => {
        const titleA = a.title.toLowerCase();
        const titleB = b.title.toLowerCase();
        return titleA.localeCompare(titleB);
    });
}

function sortReverseAlphabetically(array) {
    return array.slice().sort((a, b) => {
        const titleA = a.title.toLowerCase();
        const titleB = b.title.toLowerCase();
        return titleA.localeCompare(titleB) * -1;
    });
}

function sortMostRecent(array) {
    return array.slice().sort((a, b) => {
        const idA = a.id;
        const idB = b.id;
        if (idA < idB) {
            return 1;
        }
        else {
            return -1;
        }
    })
}

function sortLeastRecent(array) {
    return array.slice().sort((a, b) => {
        const idA = a.id;
        const idB = b.id;
        if (idA < idB) {
            return -1;
        }
        else {
            return 1;
        }
    })
}


if (pathname.includes("index.php")) {

}

else if (pathname.includes("projectsPage.php")) {
    const categories = [...new Set(project.map((item)=> {return item}))]

    document.getElementById('searchBar').addEventListener('keyup', (e)=>{
        const searchData = e.target.value.toLowerCase();
        const filterData = categories.filter((item)=> {
            return(
                item.title.toLocaleLowerCase().includes(searchData) || item.description.toLocaleLowerCase().includes(searchData)
            )
        })
        displayItem(filterData)
    });

    document.getElementById('dispAlph').addEventListener('click', () => {
        const dispData = sortAlphabetically(categories);
        displayItem(dispData)
    });

    document.getElementById('dispRevAlph').addEventListener('click', () => {
        const dispData = sortReverseAlphabetically(categories);
        displayItem(dispData)
    });

    document.getElementById('dispMRec').addEventListener('click', () => {
        const dispData = sortMostRecent(categories);
        displayItem(dispData)
    });

    document.getElementById('dispLRec').addEventListener('click', () => {
        const dispData = sortLeastRecent(categories);
        displayItem(dispData)
    });

    const displayItem = (items)=> {
        document.getElementById('root').innerHTML=items.map((item)=>{
            var {image, title, description, link} = item;
            return (
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom' style='width: 90%'>
                        <p class='large' style='text-align: center; color: #DDDDDD;'>${title}</p>
                        <p style='text-align: center; font-size: 14px; color: #DDDDDD;'>${description}</p>
                        <a class='viewButton' style='width: 50%' href='${link}'>View this project</a>
                    </div>
                </div>`
            )
        }).join('')
    };

    displayItem(categories);
}