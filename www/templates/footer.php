
    <footer>
        <p>Created By:</p>
        <p>Kipp Dunn (<a href="mailto:kipp34@vt.edu">kipp34@vt.edu)</a> and Harison Gertler (<a href="mailto:hsg32@vt.edu">hsg32@vt.edu</a>).</p>
        <strong>Scottie and Kippernicus Inc.</strong>
    </footer>

    <script src="public/popper.min.js" type="application/javascript"></script>
    <script src="public/jquery.min.js" type="application/javascript"></script>
    <script src="public/bootstrap.min.js" type="application/javascript"></script>
    <link rel="stylesheet" href="public/bootstrap.min.css">
    <script type="application/javascript">
        $(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault();
                var p = $("<p>").text($("#input").val());
                $("#data").append(p);
                $("#input").val("");
            });
        });
    </script>

    <link rel="stylesheet" href="main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</body>

</html>