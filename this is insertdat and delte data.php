<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST" enctype="multipart/form-data">
    <div>enter id<input type="text" name="id" id="id"></div>
    <div>enter name:</div><input type="text" name="username" id="username">
    <div>enter a passworrd<input type="password" name="password" id="password"></div>
    <div>enter email:<input type="email" name="email" id="email"></div>
    <div>enter no:<input type="phone" name="phone" id="phone"></div>
    <input type="file" name="image">
    <input type="submit" name="submit" value="upload"><br>
    <input type="submit" name="submit" value="submit" id="submit">
    <button type="reset" value="reset" >reset</button>
    <button type="remove" value="delete" id="delete" name="delete">delete</button>
    <button type="update" value="update" id="update" name="update">update</button>


</form>
</body>


</html>


