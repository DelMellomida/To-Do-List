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

document.addEventListener("DOMContentLoaded", function() {
    const searchTask = document.getElementById("searchTask");
    const searchInput = document.getElementById("searchInput");
    const taskList = document.getElementById("taskList");
    const searchedList = document.getElementById("searchedList");
    
    searchTask.addEventListener("submit", function(event) {
        event.preventDefault();

        const searchText = searchInput.value.trim().toLowerCase();

        // Clear the search results before performing a new search
        searchedList.innerHTML = "";

        if (searchText !== "") {
            // Loop through the task list
            for (let i = 0; i < taskList.children.length; i++) {
                const listItem = taskList.children[i];
                const itemName = listItem.textContent.toLowerCase();
                
                // Check if the item name contains the search term
                if (itemName.includes(searchText)) {
                    // Clone the matching list item and append it to the searched list
                    const clonedItem = listItem.cloneNode(true);
                    searchedList.appendChild(clonedItem);
                    taskList.style.display = "none";
                }
            }

            // Clear input field
            searchInput.value = "";
        }
    });
});

function Refresh(){
    const taskList = document.getElementById("taskList");
    const searchedList = document.getElementById("searchedList");

    searchedList.innerHTML = "";
    taskList.style.display = "block";
};
