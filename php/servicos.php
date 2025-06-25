<?php
// Página de Serviços
require_once 'includes/config.php';

$page_title = 'Serviços - ' . SITE_NAME;
$page_description = 'Conheça nossos serviços de transporte corporativo: executivo, fretamento e eventos empresariais.';

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div class="hero-text">
                <h1>Nossos <span class="gradient-text">Serviços</span></h1>
                <p>
                    Soluções completas de mobilidade corporativa desenvolvidas 
                    para atender todas as necessidades da sua empresa.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section">
    <div class="container">
        <div class="grid grid-cols-3">
            <?php foreach ($services as $service): ?>
                <div class="service-card">
                    <div class="service-icon">
                        <?php echo $service['icon']; ?>
                    </div>
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                    
                    <h4 style="margin-top: 1.5rem; margin-bottom: 1rem; color: var(--primary);">
                        Características:
                    </h4>
                    <ul class="service-features">
                        <?php foreach ($service['features'] as $feature): ?>
                            <li><?php echo $feature; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section bg-gray-50">
    <div class="container">
        <div class="text-center">
            <h2 class="mb-6">Precisa de um serviço personalizado?</h2>
            <p class="text-gray-600 mb-8" style="font-size: 1.25rem; max-width: 48rem; margin: 0 auto 2rem;">
                Nossa equipe está pronta para desenvolver soluções sob medida 
                para as necessidades específicas da sua empresa.
            </p>
            <a href="<?php echo url('contato.php'); ?>" class="btn btn-primary">
                Solicitar Orçamento Personalizado
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 