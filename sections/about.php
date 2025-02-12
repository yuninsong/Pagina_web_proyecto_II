<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de la UNEXCA</title>
    <link rel="icon" href="/assets/icon/logo-unexca_favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="/css/about_us-style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/general-style.css">
</head>
<body>

<header class="about-header">
    <div id="navbar"></div>
    <script>
        fetch("navbar.html")
            .then(response => response.text())
            .then(data => {
                document.getElementById("navbar").innerHTML = data;
            });
    </script>
</header>



    <div class="container mt-5">
        <?php include 'about_content.php'; ?>
    </div>

    <div class="index-footer" id="footer"> </div>
    <script>
        fetch("footer.html")
            .then(response => response.text())
            .then(data => {
                document.getElementById("footer").innerHTML = data;
            });
    </script> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
