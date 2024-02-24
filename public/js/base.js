
// use for udpate profile
function undo_update(target, destination) {
    var input = document.getElementById(target);
    input.value = document.getElementById(destination).value;
}