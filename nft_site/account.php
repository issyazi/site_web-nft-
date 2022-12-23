<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="icons/icon.ico" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="icons/icon.ico">
    <link rel="icon" type="image/x-icon" href="icons/icon.ico">
    <link rel="icon" href="icons/icon.ico" /> 
    <title>account</title>
</head>
<body>
    <div>
        <?php
        include 'header.php';
        include 'account_inform.php';
        include 'account_admin.php'; /* прописать условие выбора
                                    админ или юзер*/
        include 'footer.php'
        ?>
    </div>
</body>
</html>