<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
</head>
<body>
    <h1><?php echo $report['title']; ?></h1>
    <p><?php echo $report['description']; ?></p>
    <pre><?php echo $report['query']; ?></pre>
    <a href="<?php echo BASE_URL; ?>report/index">Back to Reports</a>
</body>
</html>
