const project=[
    {
        id: 0,
        image: 'res/cat.png',
        title: 'Task Manager Website',
        description: 'Skills: HTML, PHP, JavaScript, CSS, Selenium'
    },
    {
        id: 1,
        image: 'res/cat.png',
        title: 'Project 2',
        description: 'N/A'
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
        var {image, title, description} = item;
        return (
            `<div class='box'>
                <div class='img-box'>
                    <img class='images' src=${image}></img>
                </div>
                <div class='bottom'>
                    <p class="large" style="text-align: center; color: #DDDDDD;">${title}</p>
                    <p style="text-align: center; font-size: 14px; color: #DDDDDD;">${description}</p>
                    <button class="button">View this project</button>
                </div>
            </div>`
        )
    }).join('')
};

displayItem(categories);