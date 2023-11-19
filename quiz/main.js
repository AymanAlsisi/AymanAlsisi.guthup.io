var ans = document.querySelectorAll(".answer");
var change = document.querySelector("#change");
var next = document.querySelector("#next");
var back = document.querySelector("#back")

ans.forEach (item => {
    item.onclick = ()=> {
            item.classList.toggle("ansClicked")
            item.classList.remove("answer")
            document.querySelectorAll(".answer").forEach(element => {
            element.style.display = "none"
            })
            next.style.display = "block";
            change.style.display = "block";
            change.onclick = function () {
                item.classList.toggle("answer")
                item.classList.remove("ansClicked")
                document.querySelectorAll(".answer").forEach(element => {
                element.style.display = "block"
                change.style.display = "none";
                })
                }
    }
});;