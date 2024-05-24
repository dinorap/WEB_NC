<!-- news/add.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
</head>

<body>
    <h1>Add News</h1>
    <!-- Form để nhập tiêu đề và nội dung tin tức mới -->
    <form action="/news/add" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="content">Content:</label><br>
        <textarea id="content" name="content" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>
