<?php $pageTitle = 'Accueil'; require 'views/partials/header.php'; ?>

<div class="hero">
    <h1>🎓 Plateforme de Formations</h1>
    <p>Développez vos compétences avec nos formations en ligne. Inscrivez-vous, payez et accédez immédiatement à vos cours.</p>
    <a href="index.php?page=formations" class="btn-hero">Voir toutes les formations →</a>
</div>

<div class="container">
    <div class="section">
        <div class="section-title">Pourquoi nous choisir ?</div>
        <div class="section-sub">Des formations de qualité pour tous les niveaux</div>

        <div class="features">
            <div class="feature">
                <div class="feature-icon" style="background:#e3f2fd;">💡</div>
                <h3>Contenu de qualité</h3>
                <p>Formations conçues par des experts, mises à jour régulièrement avec les dernières technologies.</p>
            </div>
            <div class="feature">
                <div class="feature-icon" style="background:#e8f5e9;">🚀</div>
                <h3>Accès immédiat</h3>
                <p>Après paiement, accédez instantanément à tous les chapitres et ressources de votre formation.</p>
            </div>
            <div class="feature">
                <div class="feature-icon" style="background:#fff3e0;">🎯</div>
                <h3>Tous niveaux</h3>
                <p>Des formations pour débutants, intermédiaires et avancés. Progressez à votre rythme.</p>
            </div>
            <div class="feature">
                <div class="feature-icon" style="background:#f3e5f5;">🔒</div>
                <h3>Paiement sécurisé</h3>
                <p>Vos données sont protégées. Paiement sécurisé et confirmation instantanée par session.</p>
            </div>
        </div>
    </div>

    <div class="section" style="padding-top:0;">
        <div class="section-title">Nos formations populaires</div>
        <div class="section-sub">Découvrez une sélection de nos meilleures formations</div>

        <div class="cards-grid">
            <div class="card">
                <div class="card-header">
                    <h3>Intelligence Artificielle</h3>
                    <p>Machine learning & réseaux de neurones</p>
                </div>
                <div class="card-body">
                    <p>Maîtrisez le machine learning, les réseaux de neurones et les algorithmes d'IA modernes.</p>
                    <div class="prix">299 DT</div>
                    <div class="meta">⏱ 40h &nbsp;|&nbsp; 📊 Intermédiaire</div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=formations" class="btn btn-primary btn-block">Voir la formation</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background:#27AE60;">
                    <h3>Développement Web Full Stack</h3>
                    <p>HTML · CSS · PHP · MySQL</p>
                </div>
                <div class="card-body">
                    <p>Créez des applications web complètes de A à Z avec les technologies web modernes.</p>
                    <div class="prix">199 DT</div>
                    <div class="meta">⏱ 50h &nbsp;|&nbsp; 📊 Débutant</div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=formations" class="btn btn-primary btn-block">Voir la formation</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background:#E74C3C;">
                    <h3>Cybersécurité & Ethical Hacking</h3>
                    <p>Sécurité systèmes & tests de pénétration</p>
                </div>
                <div class="card-body">
                    <p>Apprenez à sécuriser des systèmes et à tester leur résistance avec les outils professionnels.</p>
                    <div class="prix">349 DT</div>
                    <div class="meta">⏱ 45h &nbsp;|&nbsp; 📊 Avancé</div>
                </div>
                <div class="card-footer">
                    <a href="index.php?page=formations" class="btn btn-primary btn-block">Voir la formation</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'views/partials/footer.php'; ?>
