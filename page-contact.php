<?php
/**
 * Template Name: Page Contact
 * 
 * Modèle pour la page de contact
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
        .contact-section {
            padding: 80px 0;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        .info-card {
            background: var(--bg-white);
            padding: 32px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-sm);
            display: flex;
            align-items: flex-start;
            gap: 20px;
            border: 1px solid rgba(0,0,0,0.03);
        }
        .info-icon {
            font-size: 32px;
            color: var(--secondary-color);
            background: rgba(218, 192, 163, 0.15);
            padding: 16px;
            border-radius: 12px;
        }
        .info-content h3 {
            font-size: 1.25rem;
            margin-bottom: 8px;
        }
        .info-content p, .info-content a {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.5;
        }
        .info-content a {
            display: block;
            margin-top: 4px;
            font-weight: 500;
            color: var(--primary-color);
        }
        .contact-form-container {
            background: var(--bg-white);
            padding: 48px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-md);
        }
        .contact-form-container h2 {
            margin-bottom: 16px;
        }
        .contact-form-container p {
            color: var(--text-muted);
            margin-bottom: 32px;
        }
        .form-group {
            margin-bottom: 24px;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-color);
        }
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #E5E7EB;
            border-radius: var(--radius-md);
            font-family: var(--font-body);
            font-size: 1rem;
            transition: var(--transition);
        }
        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(218, 192, 163, 0.2);
        }
        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }
        @media (max-width: 900px) {
            .contact-grid { grid-template-columns: 1fr; }
        }
    </style>

    <header class="page-header">
        <div class="container">
            <h1>Contactez-<span>nous</span></h1>
            <p style="max-width: 600px; margin: 0 auto; line-height: 1.6;">Pour toute demande d’information concernant nos formations ou nos services, vous pouvez nous contacter directement. Nous restons disponibles pour répondre à vos questions et vous accompagner dans vos démarches.</p>
        </div>
    </header>

    <section class="section contact-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-info">
                    <div class="info-card">
                        <div class="info-icon"><i class="ph-fill ph-envelope-simple"></i></div>
                        <div class="info-content">
                            <h3>Email</h3>
                            <p>Envoyez-nous vos questions, nous vous répondrons rapidement.</p>
                            <a href="mailto:idbrahi11@gmail.com">idbrahi11@gmail.com</a>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon"><i class="ph-fill ph-phone"></i></div>
                        <div class="info-content">
                            <h3>Téléphone</h3>
                            <p>Appelez-nous directement de vive voix.</p>
                            <a href="tel:0617813239">06 17 81 32 39</a>
                        </div>
                    </div>

                    <div class="info-card">
                        <div class="info-icon" style="color: #25D366; background: rgba(37, 211, 102, 0.15);"><i class="ph-fill ph-whatsapp-logo"></i></div>
                        <div class="info-content">
                            <h3>WhatsApp</h3>
                            <p>Vous pouvez également nous contacter via WhatsApp pour toute demande d’information ou pour obtenir une réponse rapide.</p>
                            <a href="https://wa.me/33617813239" target="_blank">06 17 81 32 39</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-container">
                    <h2>Nous écrire</h2>
                    <p>Vous pouvez aussi nous envoyer un message via le formulaire de contact disponible sur cette page. Nous vous répondrons dans les meilleurs délais.</p>
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="name">Nom complet</label>
                            <input type="text" id="name" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" id="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" class="form-control" placeholder="Sujet de votre demande" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" class="form-control" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width: 100%; justify-content: center;">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
