function open(projLink) {
    window.location.href = projLink;
}

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

const displayItem = (items)=> {
    document.getElementById('root').innerHTML=items.map((item)=>{
        var {image, title, description, link} = item;
        return (
            `<div class='box'>
                <div class='img-box'>
                    <img class='images' src=${image}></img>
                </div>
                <div class='bottom' style="width: 90%">
                    <p class="large" style="text-align: center; color: #DDDDDD;">${title}</p>
                    <p style="text-align: center; font-size: 14px; color: #DDDDDD;">${description}</p>
                    <p><a class="button center" style="width: 50%" href=${link}>View this project</a></p>
                </div>
            </div>`
        )
    }).join('')
};

/*<button class="button">View this project</button><input type="button" value="View this project" onclick=${link}>*/

displayItem(categories);