function createTextArea() {
    var textBox = document.createElement("TEXTAREA");
    var text = document.createTextNode("");

    textBox.appendChild(text);
    document.body.appendChild(textBox);
}