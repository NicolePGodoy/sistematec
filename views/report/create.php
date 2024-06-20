
    <h1>Create Report</h1>
    <form method="post" action="<?php echo BASE_URL; ?>report/create">
        <label>Title:</label>
        <input type="text" name="title">
        <br>
        <label>Description:</label>
        <textarea name="description"></textarea>
        <br>
        <label>Query:</label>
        <textarea name="query"></textarea>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="<?php echo BASE_URL; ?>report/index">Back to Reports</a>