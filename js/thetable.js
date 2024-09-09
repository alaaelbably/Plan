var deletBtns = document.getElementsByClassName("deleteBtn")
const deletShow = document.getElementById("deleteShow")
const deletHide = document.getElementById("deleteHide")

for (let i = 0; i < deletBtns.length; i++) {
    deletBtns[i].addEventListener("click", function () {
        deletShow.style = "top: 0"
    })
}
deleteHide.addEventListener('click', function () {
    deletShow.style = 'top: 200%'
})
closeee.addEventListener('click', function () {
    deletShow.style = 'top: 200%'
})
