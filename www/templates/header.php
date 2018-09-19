<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();
                var p = $("<p>").text($("#input").val());
                $("#data").append(p);
                $("#input").val("");
            });
        });
    </script>
</head>

<header>
    <div class="topnav">
        <a href="index">Home</a>
        <a href="challenges">Challenges</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
    </div>
</header>