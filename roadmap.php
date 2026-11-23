<?php
// roadmap.php
// The ONLY job of PHP on this page is to confirm the visitor is logged in.
// Every section, heading, and list below is hand-written HTML — no arrays, no loops.
session_start();
require __DIR__ . '/connect.php';

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
    <title>Roadmap — IGNIS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/roadmap.css">
</head>
<body>

<?php require __DIR__ . '/partials/member-nav.php'; ?>

<section class="roadmap-hero">
    <div class="member-header" style="margin-bottom:0;">
        <span class="hero-eyebrow">Direction, Not Guesswork</span>
        <h1>Roadmap</h1>
        <p class="member-sub">Pick your tribe. Here's the path, stage by stage.</p>
    </div>
</section>

<section class="member-page" style="padding-top:50px;">

    <div class="filter-tabs">
        <a href="#webdev" class="filter-tab">Web Development</a>
        <a href="#security" class="filter-tab">Cybersecurity</a>
        <a href="#web3" class="filter-tab">Blockchain &amp; Web3</a>
        <a href="#ai" class="filter-tab">AI &amp; Machine Learning</a>
    </div>

    <!-- ============ WEB DEVELOPMENT ============ -->
    <section id="webdev" class="roadmap-section">
        <div class="roadmap-section-head">
            <i class="fa-solid fa-code"></i>
            <h2 class="roadmap-section-title">Web Development</h2>
        </div>

        <div class="stage-list">

            <div class="stage-block">
                <span class="roadmap-step">01</span>
                <div class="stage-block-content">
                    <h3>Foundations</h3>
                    <p class="stage-desc">The raw building blocks — no framework yet.</p>
                    <ul class="topic-list">
                        <li>HTML5 semantic elements</li>
                        <li>CSS3 fundamentals</li>
                        <li>CSS Flexbox &amp; Grid</li>
                        <li>JavaScript basics: variables, functions, the DOM</li>
                        <li>Responsive design principles</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">02</span>
                <div class="stage-block-content">
                    <h3>Git &amp; Responsive Design</h3>
                    <p class="stage-desc">Version control and layouts that work everywhere.</p>
                    <ul class="topic-list">
                        <li>Git basics: commit, branch, merge</li>
                        <li>GitHub workflow: pull requests, issues</li>
                        <li>Media queries</li>
                        <li>Mobile-first design</li>
                        <li>CSS custom properties (variables)</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">03</span>
                <div class="stage-block-content">
                    <h3>Frontend Framework</h3>
                    <p class="stage-desc">Go deep on one framework rather than shallow on several.</p>
                    <ul class="topic-list">
                        <li>React fundamentals: components, props, state, hooks</li>
                        <li>Component architecture</li>
                        <li>State management (Context or Redux)</li>
                        <li>Client-side routing</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">04</span>
                <div class="stage-block-content">
                    <h3>Backend &amp; Databases</h3>
                    <p class="stage-desc">Server-side logic and where data actually lives.</p>
                    <ul class="topic-list">
                        <li>Node.js &amp; Express, or PHP basics</li>
                        <li>RESTful API design</li>
                        <li>MySQL/PostgreSQL fundamentals</li>
                        <li>CRUD operations</li>
                        <li>Using an ORM (Sequelize/Eloquent)</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">05</span>
                <div class="stage-block-content">
                    <h3>APIs &amp; Authentication</h3>
                    <p class="stage-desc">Connecting frontend to backend, properly and securely.</p>
                    <ul class="topic-list">
                        <li>JWT &amp; session-based auth</li>
                        <li>OAuth basics</li>
                        <li>Password hashing</li>
                        <li>CORS</li>
                        <li>API security best practices</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">06</span>
                <div class="stage-block-content">
                    <h3>Ship Real Projects</h3>
                    <p class="stage-desc">Three finished, deployed projects beat ten tutorials.</p>
                    <ul class="topic-list">
                        <li>Deployment (Vercel/Netlify/VPS)</li>
                        <li>CI/CD basics</li>
                        <li>Performance optimization</li>
                        <li>Testing (Jest/Cypress)</li>
                        <li>Building a portfolio</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ============ CYBERSECURITY ============ -->
    <section id="security" class="roadmap-section">
        <div class="roadmap-section-head">
            <i class="fa-solid fa-shield-halved"></i>
            <h2 class="roadmap-section-title">Cybersecurity</h2>
        </div>

        <div class="stage-list">

            <div class="stage-block">
                <span class="roadmap-step">01</span>
                <div class="stage-block-content">
                    <h3>Networking &amp; OS Fundamentals</h3>
                    <p class="stage-desc">How the internet actually works, and solid Linux skills.</p>
                    <ul class="topic-list">
                        <li>TCP/IP model</li>
                        <li>DNS &amp; HTTP/HTTPS</li>
                        <li>Linux command line</li>
                        <li>File permissions</li>
                        <li>Subnetting basics</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">02</span>
                <div class="stage-block-content">
                    <h3>Security Fundamentals</h3>
                    <p class="stage-desc">How systems actually get broken into.</p>
                    <ul class="topic-list">
                        <li>The CIA triad</li>
                        <li>Common attacks: phishing, XSS, SQL injection</li>
                        <li>Encryption basics</li>
                        <li>Firewalls &amp; VPNs</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">03</span>
                <div class="stage-block-content">
                    <h3>Hands-on Labs</h3>
                    <p class="stage-desc">Theory means nothing without practice.</p>
                    <ul class="topic-list">
                        <li>TryHackMe / HackTheBox rooms</li>
                        <li>Capture The Flag challenges</li>
                        <li>Burp Suite basics</li>
                        <li>Wireshark packet analysis</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">04</span>
                <div class="stage-block-content">
                    <h3>Pick a Lane</h3>
                    <p class="stage-desc">Offensive or defensive — specialize.</p>
                    <ul class="topic-list">
                        <li>Pentesting methodology (red team)</li>
                        <li>SIEM &amp; incident response (blue team)</li>
                        <li>Tools: Nmap, Metasploit, Splunk</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">05</span>
                <div class="stage-block-content">
                    <h3>Certifications</h3>
                    <p class="stage-desc">Proof of the skills you've built.</p>
                    <ul class="topic-list">
                        <li>CompTIA Security+</li>
                        <li>CEH</li>
                        <li>OSCP prep</li>
                        <li>Exam study strategy</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">06</span>
                <div class="stage-block-content">
                    <h3>Real-World Practice</h3>
                    <p class="stage-desc">Keep the skills sharp and provable.</p>
                    <ul class="topic-list">
                        <li>Bug bounty platforms (HackerOne, Bugcrowd)</li>
                        <li>Home lab setup</li>
                        <li>CTF competitions</li>
                        <li>Writing security reports</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ============ BLOCKCHAIN & WEB3 ============ -->
    <section id="web3" class="roadmap-section">
        <div class="roadmap-section-head">
            <i class="fa-solid fa-link"></i>
            <h2 class="roadmap-section-title">Blockchain &amp; Web3</h2>
        </div>

        <div class="stage-list">

            <div class="stage-block">
                <span class="roadmap-step">01</span>
                <div class="stage-block-content">
                    <h3>Blockchain Fundamentals</h3>
                    <p class="stage-desc">Not just the buzzwords — how it actually works.</p>
                    <ul class="topic-list">
                        <li>How blocks &amp; hashing work</li>
                        <li>Consensus mechanisms (PoW/PoS)</li>
                        <li>Public vs private keys</li>
                        <li>Wallets</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">02</span>
                <div class="stage-block-content">
                    <h3>Learn Solidity</h3>
                    <p class="stage-desc">Smart contract basics.</p>
                    <ul class="topic-list">
                        <li>Variables &amp; data types</li>
                        <li>Functions &amp; modifiers</li>
                        <li>Gas &amp; optimization</li>
                        <li>Events &amp; mappings</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">03</span>
                <div class="stage-block-content">
                    <h3>Build &amp; Deploy a Contract</h3>
                    <p class="stage-desc">Theory becomes real the moment it's deployed.</p>
                    <ul class="topic-list">
                        <li>Remix IDE / Hardhat setup</li>
                        <li>Testnets (e.g. Sepolia)</li>
                        <li>Contract testing</li>
                        <li>Deployment scripts</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">04</span>
                <div class="stage-block-content">
                    <h3>Web3 Frontend Integration</h3>
                    <p class="stage-desc">Connect wallets and contracts to a real interface.</p>
                    <ul class="topic-list">
                        <li>ethers.js / web3.js basics</li>
                        <li>MetaMask connection</li>
                        <li>Reading/writing contract state</li>
                        <li>Transaction handling</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">05</span>
                <div class="stage-block-content">
                    <h3>Security &amp; Auditing</h3>
                    <p class="stage-desc">This field punishes sloppy code hard.</p>
                    <ul class="topic-list">
                        <li>Reentrancy attacks</li>
                        <li>Integer overflow/underflow</li>
                        <li>Access control flaws</li>
                        <li>Audit tools (e.g. Slither)</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">06</span>
                <div class="stage-block-content">
                    <h3>Ship a Real dApp</h3>
                    <p class="stage-desc">End-to-end, live on a real network.</p>
                    <ul class="topic-list">
                        <li>Full-stack dApp architecture</li>
                        <li>IPFS for storage</li>
                        <li>Mainnet deployment considerations</li>
                        <li>Gas optimization</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ============ AI & MACHINE LEARNING ============ -->
    <section id="ai" class="roadmap-section">
        <div class="roadmap-section-head">
            <i class="fa-solid fa-brain"></i>
            <h2 class="roadmap-section-title">AI &amp; Machine Learning</h2>
        </div>

        <div class="stage-list">

            <div class="stage-block">
                <span class="roadmap-step">01</span>
                <div class="stage-block-content">
                    <h3>Math &amp; Python Foundations</h3>
                    <p class="stage-desc">The toolkit everything else is built on.</p>
                    <ul class="topic-list">
                        <li>Linear algebra basics</li>
                        <li>Statistics &amp; probability</li>
                        <li>NumPy &amp; Pandas</li>
                        <li>Python fundamentals</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">02</span>
                <div class="stage-block-content">
                    <h3>Core ML Concepts</h3>
                    <p class="stage-desc">Real datasets, real models.</p>
                    <ul class="topic-list">
                        <li>Supervised vs unsupervised learning</li>
                        <li>scikit-learn workflows</li>
                        <li>Regression &amp; classification</li>
                        <li>Model evaluation metrics</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">03</span>
                <div class="stage-block-content">
                    <h3>Deep Learning Fundamentals</h3>
                    <p class="stage-desc">From first principles to real frameworks.</p>
                    <ul class="topic-list">
                        <li>Neural network basics</li>
                        <li>PyTorch or TensorFlow</li>
                        <li>Backpropagation</li>
                        <li>CNNs &amp; RNNs, intro</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">04</span>
                <div class="stage-block-content">
                    <h3>Specialize</h3>
                    <p class="stage-desc">Pick a lane to go deep in.</p>
                    <ul class="topic-list">
                        <li>NLP: transformers, tokenization</li>
                        <li>Computer Vision: classification, detection</li>
                        <li>Applied AI engineering</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">05</span>
                <div class="stage-block-content">
                    <h3>Build Real Projects</h3>
                    <p class="stage-desc">Solve an actual problem, end to end.</p>
                    <ul class="topic-list">
                        <li>Dataset collection &amp; cleaning</li>
                        <li>Model training &amp; fine-tuning</li>
                        <li>Experiment tracking</li>
                        <li>Project documentation</li>
                    </ul>
                </div>
            </div>

            <div class="stage-block">
                <span class="roadmap-step">06</span>
                <div class="stage-block-content">
                    <h3>Deploy &amp; MLOps Basics</h3>
                    <p class="stage-desc">A model stuck in a notebook isn't shipped.</p>
                    <ul class="topic-list">
                        <li>Model serving (FastAPI/Flask)</li>
                        <li>Containerization (Docker)</li>
                        <li>Monitoring</li>
                        <li>Basic MLOps pipelines</li>
                    </ul>
                </div>
            </div>

        </div>
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

</body>
</html>
