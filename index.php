<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>home</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <!-- TODO logo image here -->
                GAMEHIST 
            </div>
            <div class="menu">
                <a href="#">About</a>
                <a href="#">Features</a>
                <a href="#">Games</a>
                <a href="#">Contact</a>
            </div>
            <div class="auth-btn">
                <button class="btn">Sign In</button>
                <button class="btn primary">Sign Up</button>
            </div>
         </nav>
    </header>

    <section class="hero">
        <div class="hero-logo">
            <!-- image-->
        </div>
        <div class="hero-text">
            <h1>Track Game Prices on Steam</h1>
            <p>Get the best deals by tracking the price history of your favorite games</p>
        </div>
        <div class="search_bar">
            <form action="#" method="GET">
                <input type="search" name="q" placeholder="Search for a game..." />
                <button type="submit">🔍SEARCH</button>
            </form>
        </div>
        <div class="stats">
            <div class="stat"><!-- TODO games tracked --> +20.000 games</div>
            <div class="stat"><!-- TODO users --></div>
            <div class="stat"><!-- TODO price tracking --></div>
        </div>
    </section>
    <section class="updates">
        <h2>Recent price updates</h2>
        <div class="cards">
            <div class="card">
                <div class="card-image" style="background-image: url(#)">
                    <span class="discount">53%<!--Discount porcentage--></span>
                </div>

                <div class="card-info">
                    <h3>GAME NAME</h3>
                    <p class="old-price">$59.99</p>
                    <p class="new-price">$29.99</p>
                    <p class="date"> 26 de Março</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <span class="discount"><!--Discount porcentage--></span>
                </div>

                <div class="card-info">
                    <h3>GAME NAME</h3>
                    <p class="old-price">$59.99</p>
                    <p class="new-price">$29.99</p>
                    <p class="date"> 26 de Março</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <span class="discount"><!--Discount porcentage--></span>
                </div>

                <div class="card-info">
                    <h3>GAME NAME</h3>
                    <p class="old-price">$59.99</p>
                    <p class="new-price">$29.99</p>
                    <p class="date"> 26 de Março</p>
                </div>
            </div>

        </div>
    </section>
</body>
</html>