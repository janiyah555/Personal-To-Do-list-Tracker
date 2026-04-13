function validateTaskForm() {
    let name = document.forms["taskForm"]["task_name"].value;
    if(name == "") {
        alert("Task name must be filled out");
        return false;
    }
    return true;
}