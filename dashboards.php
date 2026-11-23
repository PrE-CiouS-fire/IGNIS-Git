<?php

session_start();
require __DIR__ . '/connect.php';

if (!isset($_SESSION["user_id"])) {
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION["user_id"];

$sql = "SELECT fullname FROM signup WHERE ID = :id";
$statement = $pdo->prepare($sql);
$statement->execute(["id" => $user_id]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    session_destroy();
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard — IGNIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/resources.css">
</head>
<body>

<?php require __DIR__ . '/partials/member-nav.php'; ?>

<section class="member-page">

    <div class="member-header">
        <span class="hero-eyebrow">Welcome back</span>
        <h1><?= htmlspecialchars($user["fullname"]) ?></h1>
        <!-- <p class="member-sub"><?= htmlspecialchars($user["tech_track"] ?: "No tribe selected yet") ?></p> -->
    </div>



    
    <section class="dash-section">
        <div class="dash-section-head">
            <h2>From the Library</h2>
        </div>

        <div class="resource-row">

            <a href="resource-detail.php?id=eloquent-js" class="resource-card">
                <div class="resource-img-wrap img-fallback"></div>
                <h3>Eloquent JavaScript</h3>
                <p class="resource-author">by Marijn Haverbeke</p>
            </a>

            <a href="resource-detail.php?id=odin-project" class="resource-card">
                <div class="resource-img-wrap img-fallback"></div>
                <h3>The Odin Project</h3>
                <p class="resource-author">by The Odin Project</p>
            </a>

            <a href="resource-detail.php?id=cs50" class="resource-card">
                <div class="resource-img-wrap img-fallback"></div>
                <h3>CS50</h3>
                <p class="resource-author">by David J. Malan</p>
            </a>

        </div>

        <a href="resources.php" class="btn primary dash-btn">See More Resources</a>
    </section>



    <section class="dash-section">
        <div class="dash-section-head">
            <h2>Your Roadmap at a Glance</h2>
        </div>

        <div class="roadmap-glance">
            <span class="glance-pill">Web Development</span>
            <i class="fa-solid fa-arrow-right"></i>
            <span class="glance-pill">Cybersecurity</span>
            <i class="fa-solid fa-arrow-right"></i>
            <span class="glance-pill">Blockchain &amp; Web3</span>
            <i class="fa-solid fa-arrow-right"></i>
            <span class="glance-pill">AI &amp; Machine Learning</span>
        </div>

        <a href="roadmap.php" class="btn primary dash-btn">View Full Roadmap</a>
    </section>

</section>



<footer>
    <div class="footer-grid">
        <div class="footer-brand">
            <a href="index.html" class="logo"><i class="fa-solid fa-fire-flame-curved"></i> IGNIS</a>
            <p>A community for the builders, innovators, and changemakers in tech who are done procrastinating.</p>
        </div>
        <div class="footer-col">
            <h4>Explore</h4>
            <a href="tribes.html">The Tribes</a>
            <a href="path.html">The Path</a>
            <a href="spaces.html">The Spaces</a>
        </div>
        <div class="footer-col">
            <h4>IGNIS</h4>
            <a href="index.html#manifesto">About</a>
            <a href="signup.html">Join Us</a>
            <a href="login.html">Member Login</a>
        </div>
    </div>
    <div class="footer-bottom">© 2026 IGNIS. All rights reserved.</div>
</footer>

</body>
</html>
