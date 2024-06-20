
    <h1>Edit Report</h1>
    <form method="post" action="<?php echo BASE_URL; ?>report/edit/<?php echo $report['id']; ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $report['title']; ?>">
        <br>
        <label>Description:</label>
        <textarea name="description"><?php echo $report['description']; ?></textarea>
        <br>
        <label>Query:</label>
        <textarea name="query"><?php echo $report['query']; ?></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="<?php echo BASE_URL; ?>report/index">Back to Reports</a>

