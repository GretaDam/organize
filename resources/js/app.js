require('./bootstrap');

const userConnect = document.getElementById("userConnect")

userConnect.addEventListener('submit', function(event) {
    event.preventDefault()
    if(!checkInput(this.elements)) return
    this.submit()
}) 


function checkInput (els) {
    for (let i = 0; i<els.length; i++) {
        if (els[i].value ==="") return false
    }
    return true
}