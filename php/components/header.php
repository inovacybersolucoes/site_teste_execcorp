<?php
// Componente Header/Navbar
$current_page = current_page();
?>

<nav class="navbar transparent">
    <div class="container">
        <div class="navbar-container">
            <!-- Logo/Brand -->
            <a href="<?php echo url('index.php'); ?>" class="navbar-brand">
                <?php echo COMPANY_NAME; ?>
            </a>

            <!-- Desktop Navigation -->
            <ul class="navbar-nav">
                <li>
                    <a href="<?php echo url('index.php'); ?>" 
                       class="<?php echo is_current_page('home') ? 'active' : ''; ?>">
                        Início
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('servicos.php'); ?>" 
                       class="<?php echo is_current_page('servicos') ? 'active' : ''; ?>">
                        Serviços
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('sobre.php'); ?>" 
                       class="<?php echo is_current_page('sobre') ? 'active' : ''; ?>">
                        Sobre
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('contato.php'); ?>" 
                       class="<?php echo is_current_page('contato') ? 'active' : ''; ?>">
                        Contato
                    </a>
                </li>
                <li>
                    <a href="#" class="btn btn-primary">
                        Área do Cliente
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="<?php echo url('index.php'); ?>" 
               class="<?php echo is_current_page('home') ? 'active' : ''; ?>">
                Início
            </a>
            <a href="<?php echo url('servicos.php'); ?>" 
               class="<?php echo is_current_page('servicos') ? 'active' : ''; ?>">
                Serviços
            </a>
            <a href="<?php echo url('sobre.php'); ?>" 
               class="<?php echo is_current_page('sobre') ? 'active' : ''; ?>">
                Sobre
            </a>
            <a href="<?php echo url('contato.php'); ?>" 
               class="<?php echo is_current_page('contato') ? 'active' : ''; ?>">
                Contato
            </a>
            <a href="<?php echo url('termos-de-uso.php'); ?>">
                Termos de Uso
            </a>
            <a href="<?php echo url('politica-de-privacidade.php'); ?>">
                Política de Privacidade
            </a>
            <div class="py-4">
                <a href="#" class="btn btn-primary" style="width: 100%;">
                    Área do Cliente
                </a>
            </div>
        </div>
    </div>
</nav> 