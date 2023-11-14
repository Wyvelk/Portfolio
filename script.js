// JavaScript to toggle the expandable boxes
document.addEventListener('DOMContentLoaded', function () {
    const boxTitles = document.querySelectorAll('.box-title');
    const boxContents = document.querySelectorAll('.box-content');

    boxTitles.forEach(function (title, index) {
        title.addEventListener('click', function () {
            if (boxContents[index].style.maxHeight) {
                boxContents[index].style.maxHeight = null; // Close the box
            } else {
                boxContents[index].style.maxHeight = boxContents[index].scrollHeight + 'px'; // Open the box
            }
        });
    });
});