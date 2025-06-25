<?php
// Componente Footer
?>

<footer class="footer">
    <!-- Botão Scroll to Top -->
    <button class="scroll-top" title="Voltar ao topo">
        <i class="fas fa-arrow-up"></i>
    </button>

    <div class="footer-content">
        <div class="container">
            <div class="grid grid-cols-4">
                <!-- Sobre a Empresa -->
                <div class="footer-section">
                    <h3 class="gradient-text"><?php echo COMPANY_NAME; ?></h3>
                    <p class="mb-6">
                        Soluções inteligentes de mobilidade corporativa para sua empresa.
                        Tecnologia e conforto em cada viagem.
                    </p>
                    <div class="social-links">
                        <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" title="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo LINKEDIN_URL; ?>" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

                <!-- Links Rápidos -->
                <div class="footer-section">
                    <h3>Links Rápidos</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="<?php echo url('index.php'); ?>">Início</a>
                        </li>
                        <li>
                            <a href="<?php echo url('servicos.php'); ?>">Serviços</a>
                        </li>
                        <li>
                            <a href="<?php echo url('sobre.php'); ?>">Sobre</a>
                        </li>
                        <li>
                            <a href="<?php echo url('contato.php'); ?>">Contato</a>
                        </li>
                        <li>
                            <a href="<?php echo url('termos-de-uso.php'); ?>">Termos de Uso</a>
                        </li>
                        <li>
                            <a href="<?php echo url('politica-de-privacidade.php'); ?>">Política de Privacidade</a>
                        </li>
                    </ul>
                </div>

                <!-- Informações de Contato -->
                <div class="footer-section">
                    <h3>Contato</h3>
                    <ul class="footer-links">
                        <li>
                            <i class="fas fa-map-marker-alt" style="margin-right: 0.75rem; color: var(--primary);"></i>
                            <span><?php echo COMPANY_ADDRESS; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-phone" style="margin-right: 0.75rem; color: var(--primary);"></i>
                            <span><?php echo COMPANY_PHONE; ?></span>
                        </li>
                        <li>
                            <i class="fas fa-envelope" style="margin-right: 0.75rem; color: var(--primary);"></i>
                            <span><?php echo COMPANY_EMAIL; ?></span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p class="mb-4">
                        Receba novidades e atualizações sobre nossos serviços.
                    </p>
                    <form id="newsletter-form" class="newsletter-form">
                        <div class="form-group">
                            <input 
                                type="email" 
                                class="form-input" 
                                placeholder="Seu e-mail"
                                required
                                style="background-color: rgba(255, 255, 255, 0.1); color: white; border-color: rgba(255, 255, 255, 0.2);"
                            >
                        </div>
                        <button 
                            type="submit" 
                            class="btn btn-primary" 
                            style="width: 100%;"
                        >
                            Inscrever-se
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="footer-bottom">
        <div class="container">
            <p>
                © <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?> - Transporte Corporativo. 
                Todos os direitos reservados.
            </p>
        </div>
    </div>
</footer> 