
    <footer>
        <p>Created By:</p>
        <p>Kipp Dunn (<a href="mailto:kipp34@vt.edu">kipp34@vt.edu)</a> and Harison Gertler (<a href="mailto:hsg32@vt.edu">hsg32@vt.edu</a>).</p>
        <strong>Scottie and Kippernicus Inc.</strong>
    </footer>

    <script src="assets/vendor/popper.min.js" type="application/javascript"></script>
    <script src="assets/vendor/jQuery/jquery-3.3.1.min.js" type="application/javascript"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js" type="application/javascript"></script>
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

</body>

</html>
