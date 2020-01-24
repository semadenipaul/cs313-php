function calcTotal() {
    document.getElementById("total").value = '$' + 0;
    var sum = 0;
    var choices = document.getElementsByName('choice[]');
    for (i = 0; i < choices.length; i++) {
        if (choices[i].checked) {
            sum += parseFloat(choices[i].value);
        }
    }
    document.getElementById("total").value = '$' + (sum.toFixed(2));
}