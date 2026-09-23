<?php
/**
 * Template Name: Page Mentions Légales
 * 
 * Modèle pour la page "Mentions Légales"
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
            <h1>Mentions <span>Légales</span></h1>
            <p>Informations légales concernant l'éditeur et l'hébergeur du site.</p>
        </div>
    </header>

    <section class="section content-section">
        <div class="container">
            <div class="content-block">
                <h2>Éditeur du site</h2>
                <p>Le présent site est édité par :<br>
                <strong>IDB-Formation</strong><br>
                Entrepreneur individuel</p>
                <p><strong>Responsable de la publication :</strong><br>
                El Hassane ID BRAHIM</p>
                <p><strong>Adresse :</strong><br>
                38 rue de Meaux<br>
                93140 Bondy<br>
                France</p>
                <p><strong>Email :</strong><br>
                idbrahi11@gmail.com</p>
                <p><strong>Téléphone :</strong><br>
                06 17 81 32 39</p>
                <p><strong>Numéro SIREN :</strong><br>
                943 537 977</p>
                <p><strong>Code APE :</strong><br>
                8559B – Autres enseignements</p>
                <p><strong>Nom commercial :</strong><br>
                IDB-Formation</p>
                <p><strong>Activité :</strong><br>
                Rédaction de contenu pédagogique et dispense de formations à destination des professionnels.</p>
            </div>

            <div class="content-block">
                <h2>Statut de l’entreprise</h2>
                <p>IDB-Formation est une entreprise individuelle exerçant sous le régime de la micro-entreprise.<br>
                L’entreprise est immatriculée au Registre National des Entreprises depuis le 22 avril 2025.</p>
            </div>

            <div class="content-block">
                <h2>Hébergement du site</h2>
                <p>Le site est hébergé par :</p>
                <p><strong>Nom de l’hébergeur :</strong><br>
                Hostinger International Ltd.</p>
                <p><strong>Adresse :</strong><br>
                61 Lordou Vironos str., 6023 Larnaca, Chypre</p>
                <p><strong>Site internet :</strong><br>
                <a href="https://www.hostinger.fr">www.hostinger.fr</a></p>
            </div>

            <div class="content-block">
                <h2>Propriété intellectuelle</h2>
                <p>L’ensemble des contenus présents sur ce site (textes, images, logos, documents pédagogiques, modules de formation, etc.) est protégé par les dispositions du Code de la propriété intellectuelle.</p>
                <p>Toute reproduction, représentation, modification ou diffusion, totale ou partielle, sans autorisation préalable écrite de l’éditeur est interdite.</p>
            </div>

            <div class="content-block">
                <h2>Responsabilité</h2>
                <p>L’éditeur du site s’efforce de fournir des informations aussi précises que possible. Toutefois, il ne pourra être tenu responsable des omissions, inexactitudes ou carences dans la mise à jour des informations présentes sur le site.</p>
                <p>Les informations figurant sur le site sont données à titre indicatif et sont susceptibles d’évoluer.</p>
            </div>

            <div class="content-block">
                <h2>Données personnelles</h2>
                <p>Les informations éventuellement collectées via le site (formulaire de contact, demandes d’information, etc.) sont destinées uniquement à la gestion des demandes des utilisateurs.</p>
                <p>Conformément au Règlement Général sur la Protection des Données (RGPD), les utilisateurs disposent d’un droit d’accès, de rectification et de suppression des données les concernant.</p>
                <p>Ces droits peuvent être exercés en contactant : idbrahi11@gmail.com</p>
            </div>

            <div class="content-block">
                <h2>Droit applicable</h2>
                <p>Le présent site est soumis au droit français. Tout litige relatif à l’utilisation du site sera soumis aux juridictions compétentes.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
