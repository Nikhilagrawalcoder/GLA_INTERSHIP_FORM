// form.js
function toggleOtherInput(checked) {
    var otherInput = document.getElementById('otherInput');
    if (checked) {
        otherInput.style.display = 'block';
        otherInput.focus();
    } else {
        otherInput.style.display = 'none';
        otherInput.value = '';
    }
}
