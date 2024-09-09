// var deletBtns = document.getElementsByClassName("deleteBtn")
// const deletShow = document.getElementById("deleteShow")
// const deletHide = document.getElementById("deleteHide")

// for (let i = 0; i < deletBtns.length; i++) {
//     deletBtns[i].addEventListener("click", function () {
//         deletShow.style = "top: 0"
//     })
// }
// deleteHide.addEventListener('click', function () {
//     deletShow.style = 'top: 200%'
// })
// closeee.addEventListener('click', function () {
//     deletShow.style = 'top: 200%'
// })


// add sprint

function addsprint() {
    const addSprint = document.querySelector('.sprintpop')
    addSprint.style.display = 'flex'
}

function hidesprint() {
    const addSprint = document.querySelector('.sprintpop')
    addSprint.style.display = 'none'
}
// function addsprint(projectId) {
//     document.getElementById('sprint-project-id').value = projectId;
//     document.querySelector('.sprintpop').style.display = 'block'; // Show the form
// }

// function hidesprint() {
//     document.querySelector('.sprintpop').style.display = 'none';
// }

// add projects

function addproject() {
    const addproject = document.querySelector('.add-project')
    addproject.style.display = 'flex'
}

function hideproject() {
    const addproject = document.querySelector('.add-project')
    addproject.style.display = 'none'
}

// add task

function addtask() {
    const addTask = document.querySelector('.semi-body')
    addTask.style.display = 'flex'
}

function hidetask() {
    const addTask = document.querySelector('.semi-body')
    addTask.style.display = 'none'
}



