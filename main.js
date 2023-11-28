
function buttonClicked() {
    const submitB = document.getElementsByTagName("button")[0];
    var inputs = document.getElementsByTagName("input")
    var x = 0;
    for (var i = 0; i < inputs.length; i++) {if (inputs[i].value === '') {} else {x++}}

    if (x == 15) { submitB.type = "submit"; }
    else { submitB.type = "button"; window.alert("PREENCHA TODOS OS CAMPOS!")}

}