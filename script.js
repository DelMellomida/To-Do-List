document.addEventListener("DOMContentLoaded", function() {
    const taskForm = document.getElementById("taskForm");
    const taskInput = document.getElementById("taskInput");
    const taskList = document.getElementById("taskList");

    // Event listener for form submission
    taskForm.addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent form submission

        const taskText = taskInput.value.trim(); // Get task text and remove whitespace

        if (taskText !== "") {
            // Create new task item
            const taskItem = document.createElement("li");
            taskItem.textContent = taskText;

            // Add event listener for completing task
            taskItem.addEventListener("click", function() {
                taskItem.classList.toggle("completed");
            });

            // Add event listener for deleting task
            taskItem.addEventListener("contextmenu", function(event) {
                event.preventDefault(); // Prevent context menu from appearing
                taskItem.remove();
            });

            // Append task item to task list
            taskList.appendChild(taskItem);

            // Clear input field
            taskInput.value = "";
        }
    });
});
