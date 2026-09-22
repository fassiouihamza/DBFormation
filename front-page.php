<?php
/**
 * Template Name: Page d'accueil
 * 
 * Modèle pour la page d'accueil (Front Page)
 */

get_header(); ?>

    <header class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <span class="badge">Expertise & Conformité</span>
                <h1>Formations réglementaires pour les <span>professionnels</span></h1>
                <p>IDB Formation propose des formations destinées aux professionnels de l’assurance, de la banque et de l’immobilier afin de répondre aux obligations de formation et de développer les compétences nécessaires à l’exercice de ces activités.</p>
                <div class="hero-actions">
                    <a href="#formations" class="btn-primary">Accéder aux formations <i class="ph ph-arrow-right"></i></a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-secondary">Nous contacter</a>
                </div>
            </div>
        </div>
    </header>

    <section id="formations" class="section domains-section">
        <div class="container">
            <div class="section-header">
                <h2>Nos domaines de <span>formation</span></h2>
                <p>Des programmes conçus pour répondre à vos obligations réglementaires</p>
            </div>
            
            <div class="cards-grid">
                <!-- Assurance Card -->
                <div class="domain-card">
                    <div class="card-icon">
                        <i class="ph-fill ph-shield-check"></i>
                    </div>
                    <h3>Assurance – IAS</h3>
                    <p>Formation continue DDA 15 heures destinée aux intermédiaires en assurance afin de maintenir et actualiser leurs compétences.</p>
                    <a href="#" class="card-link">En savoir plus <i class="ph ph-caret-right"></i></a>
                </div>

                <!-- Banque Card -->
                <div class="domain-card">
                    <div class="card-icon">
                        <i class="ph-fill ph-bank"></i>
                    </div>
                    <h3>Banque – IOBSP</h3>
                    <p>Formation continue DCI 7 heures destinée aux intermédiaires en opérations de banque et services de paiement.</p>
                    <a href="#" class="card-link">En savoir plus <i class="ph ph-caret-right"></i></a>
                </div>

                <!-- Immobilier Card -->
                <div class="domain-card">
                    <div class="card-icon">
                        <i class="ph-fill ph-buildings"></i>
                    </div>
                    <h3>Immobilier – Loi Alur</h3>
                    <p>Formations destinées aux professionnels de l’immobilier dans le cadre de l’obligation de formation prévue par la loi Alur.</p>
                    <a href="#" class="card-link">En savoir plus <i class="ph ph-caret-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container cta-container">
            <div class="cta-content">
                <h2>Prêt à développer vos compétences ?</h2>
                <p>Découvrez nos formations dans les différentes rubriques du site ou contactez-nous pour toute demande d’information.</p>
            </div>
            <div class="cta-actions">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">Demander des informations</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
