<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>To-Do List</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <br>
        <h1>To-Do-List Application</h1>
        <hr>
        <p>User: Jhondel Mellomida</p>
        <div class="container">
            <div class="form-container">
                <form id="taskForm">
                    <input type="text" id="taskInput" placeholder="Add new task...">
                    <button type="submit">Add</button>
                </form>
            </div>
            <input id="searchButton" type="button" value="Refresh" onclick="Refresh();" />
            <div class="form-container searchTask">
                <form id="searchTask">
                    <input type:"text" id="searchInput" placeholder="Search task...">
                    <button type="submit">Search</button>
                </form>
            </div>
            <ul id="taskList">
            </ul>
            <ul id="searchedList"></ul>
        </div>
        <script src="scripts/appScript.js"></script>
    </body>
</html>