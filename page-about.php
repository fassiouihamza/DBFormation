<?php
/**
 * Template Name: Page Qui sommes-nous
 * 
 * Modèle pour la page "Qui sommes-nous ?"
 */

get_header(); ?>

    <style>
        .page-header {
            padding: 160px 0 80px;
            background-color: var(--primary-color);
            color: var(--bg-white);
            text-align: center;
        }
        .page-header h1 {
            color: var(--bg-white);
            font-size: 3.5rem;
            margin-bottom: 24px;
        }
        .page-header h1 span {
            color: var(--secondary-color);
        }
        .content-section {
            padding: 80px 0;
            max-width: 800px;
            margin: 0 auto;
        }
        .content-block {
            margin-bottom: 48px;
            background: var(--bg-white);
            padding: 48px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
        }
        .content-block h2 {
            font-size: 2rem;
            margin-bottom: 24px;
            color: var(--primary-color);
        }
        .content-block p {
            font-size: 1.125rem;
            color: var(--text-muted);
            margin-bottom: 20px;
            line-height: 1.8;
        }
    </style>

    <header class="page-header">
        <div class="container">
            <h1>Qui <span>sommes-nous ?</span></h1>
            <p>Découvrez notre approche et notre expertise.</p>
        </div>
    </header>

    <section class="section content-section">
        <div class="container">
            <div class="content-block">
                <h2>Notre expertise</h2>
                <p><strong>IDB Formation</strong> est un organisme de formation spécialisé dans les secteurs de l’assurance, de la banque et de l’immobilier. Nous proposons des formations destinées aux professionnels et aux organismes de formation souhaitant développer leurs compétences dans des domaines réglementés.</p>
                <p>Nos formations couvrent notamment l’intermédiation en assurance (IAS), l’intermédiation en opérations de banque et services de paiement (IOBSP), ainsi que les formations destinées aux professionnels de l’immobilier dans le cadre de la loi Alur.</p>
            </div>

            <div class="content-block">
                <h2>Notre approche pédagogique</h2>
                <p>Chez IDB Formation, nous privilégions une pédagogie claire et orientée vers la pratique. Les contenus sont conçus pour être accessibles et directement utiles aux professionnels.</p>
                <p>Les formations s’appuient sur des explications simples, des exemples concrets et des évaluations permettant de vérifier l’acquisition des connaissances. L’objectif est de faciliter la compréhension des obligations réglementaires et leur application dans la pratique professionnelle.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
