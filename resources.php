<?php

session_start();
require __DIR__ . '/connect.php'; // your actual connection file

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
    <title>Resources — IGNIS</title>
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
        <span class="hero-eyebrow">The Library</span>
        <h1>Resources</h1>
        <p class="member-sub">Books, tutorials and courses worth your time.</p>
    </div>

    <section class="resource-section">
        <h2 class="resource-category-title">Books</h2>
        <div class="resource-row" id="books-row"></div>
    </section>

    <section class="resource-section">
        <h2 class="resource-category-title">Tutorials</h2>
        <div class="resource-row" id="tutorials-row"></div>
    </section>

    <section class="resource-section">
        <h2 class="resource-category-title">Courses</h2>
        <div class="resource-row" id="courses-row"></div>
    </section>
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
            <a href="signup.html">Join Us</a>
            <a href="login.html">Member Login</a>
        </div>
    </div>
    <div class="footer-bottom">© 2026 IGNIS. All rights reserved.</div>
</footer>




<script src="JavaScript/resources-data.js"></script>
<script>
    // Build one card's HTML from a resource object.
    function buildCard(r) {
        const card = document.createElement('div');
        card.className = 'resource-card';
        
        card.addEventListener('click', () => {
            window.location.href = `resource-detail.php?id=${encodeURIComponent(r.id)}`;
        });

        card.innerHTML = `
            <div class="resource-img-wrap">
                <img src="${r.image}" alt="${r.title}" onerror="this.parentElement.classList.add('img-fallback'); this.remove();">
            </div>
            <h3>${r.title}</h3>
            <p class="resource-author">by ${r.author}</p>
            <a class="btn-external" href="${r.externalUrl}" target="_blank" rel="noopener">
                View Resource <i class="fa-solid fa-arrow-up-right-from-square"></i>
            </a>
        `;

        // ...except the external button, which should go straight to the resource itself.
        card.querySelector('.btn-external').addEventListener('click', (e) => e.stopPropagation());

        return card;
    }

    function renderRow(rowId, category) {
        const row = document.getElementById(rowId);
        const items = resourcesData.filter(r => r.category === category);
        if (items.length === 0) {
            row.innerHTML = '<p class="empty-state">Nothing here yet.</p>';
            return;
        }
        items.forEach(r => row.appendChild(buildCard(r)));
    }

    renderRow('books-row', 'books');
    renderRow('tutorials-row', 'tutorials');
    renderRow('courses-row', 'courses');
</script>








</body>
</html>
