    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">IDB <span>Formation</span></a>
                <p>Organisme de formation spécialisé dans les secteurs réglementés.</p>
            </div>
            <div class="footer-links">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/qui-sommes-nous' ) ); ?>">Qui sommes-nous ?</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Contact</h4>
                <ul>
                    <li><i class="ph ph-envelope-simple"></i> contact@idbformation.com</li>
                    <li><i class="ph ph-phone"></i> 06 17 81 32 39</li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; <?php echo date('Y'); ?> IDB Formation. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
