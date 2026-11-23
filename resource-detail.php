<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resource — IGNIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/resources.css">
</head>
<body>

<?php require __DIR__ . '/partials/member-nav.php'; ?>

<section class="member-page" id="detailPage" style="display:none;">
    <a href="resources.php" class="back-link"><i class="fa-solid fa-arrow-left"></i> Back to Resources</a>

    <div class="detail-layout">
        <div class="detail-img-wrap">
            <img id="detailImage" src="" alt="">
        </div>
        <div class="detail-content">
            <span class="resource-type-badge" id="detailCategory"></span>
            <h1 id="detailTitle"></h1>
            <p class="detail-author" id="detailAuthor"></p>

            <div class="detail-meta">
                <div><span class="detail-meta-label">Difficulty</span><span id="detailDifficulty"></span></div>
                <div><span class="detail-meta-label">Best for</span><span id="detailAudience"></span></div>
            </div>

            <p class="detail-description" id="detailDescription"></p>

            <a id="detailExternalLink" href="#" target="_blank" rel="noopener" class="btn primary">Get Resource Now</a>
        </div>
    </div>
</section>

<section class="member-page" id="notFound" style="display:none;">
    <div class="no-sprint-card">
        <h2>Resource not found</h2>
        <p>This one might have been removed or the link is wrong.</p>
        <a href="resources.php" class="btn primary">Back to Resources</a>
    </div>
</section>


<!-- ================= FOOTER ================= -->
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
            <a href="#manifesto">About</a>
            <a href="apply.html">Apply to Join</a>
            <a href="login.html">Member Login</a>
        </div>
    </div>
    <div class="footer-bottom">© 2026 IGNIS. All rights reserved.</div>
</footer>







<script src="JavaScript/resources-data.js"></script>
<script>
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');
    const resource = resourcesData.find(r => r.id === id);

    if (!resource) {
        document.getElementById('notFound').style.display = 'block';
    } else {
        document.getElementById('detailPage').style.display = 'block';
        document.title = resource.title + ' — IGNIS';

        document.getElementById('detailImage').src = resource.image;
        document.getElementById('detailImage').alt = resource.title;
        document.getElementById('detailImage').onerror = function () {
            this.parentElement.classList.add('img-fallback');
            this.remove();
        };
        document.getElementById('detailCategory').textContent = resource.category;
        document.getElementById('detailTitle').textContent = resource.title;
        document.getElementById('detailAuthor').textContent = 'by ' + resource.author;
        document.getElementById('detailDifficulty').textContent = resource.difficulty;
        document.getElementById('detailAudience').textContent = resource.audience;
        document.getElementById('detailDescription').textContent = resource.description;
        document.getElementById('detailExternalLink').href = resource.externalUrl;
    }
</script>

</body>
</html>
