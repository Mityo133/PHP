<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
</head>
<?php require 'views/partials/buttons.php'; ?>
<body>
    <h1>Add Items</h1>
        <form method="POST" action="/create">
        <label for="body">Note text</label>
        <textarea name="body" id="body" cols="30" rows="10" required></textarea>
        <button type="submit">Create</button>
    </form>
            
</body>
</html>