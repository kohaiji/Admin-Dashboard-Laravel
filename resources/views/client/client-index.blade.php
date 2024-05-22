<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>
<body>
    <header>
        <header>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.w3schools.com/bootstrap5/la.jpg" alt="Los Angeles" class="d-block" style="width:100%; height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.w3schools.com/bootstrap5/chicago.jpg" alt="Chicago" class="d-block" style="width:100%; height: 400px">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.w3schools.com/bootstrap5/ny.jpg" alt="New York" class="d-block" style="width:100%; height: 400px">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </header>
    </header>
</body>
</html>
