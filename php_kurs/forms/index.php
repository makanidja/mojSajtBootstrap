<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="getData.php" method="get">
        <input type="text" name="username" placeholder="username"></br>
        <input type="password" name="password" placeholder="password"></br>
        <button type="submit">Save</button>
    </form>

    <a href="getData.php?username=DAnilo&password=123">Go to get Data</a>
    
</body>
</html>