<?php
// Página Principal - Home
require_once 'includes/config.php';

$page_title = SITE_NAME;
$page_description = SITE_DESCRIPTION;

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <div class="hero-text">
                <h1>
                    Transporte Corporativo 
                    <span class="gradient-text">Premium</span>
                </h1>
                <p>
                    Excelência em mobilidade corporativa com tecnologia avançada,
                    conforto superior e profissionalismo incomparável.
                </p>
                <div class="hero-buttons">
                    <a href="<?php echo url('contato.php'); ?>" class="btn btn-primary">
                        Solicitar Orçamento
                    </a>
                    <a href="<?php echo url('servicos.php'); ?>" class="btn btn-secondary" style="color: white; border-color: white;">
                        Nossos Serviços
                    </a>
                </div>
            </div>

            <div class="hero-image">
                <?php include 'components/slideshow.php'; ?>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator"></div>
</section>

<!-- Features Section -->
<section class="section features">
    <div class="container">
        <div class="text-center mb-8">
            <h2>
                Por que escolher a 
                <span class="gradient-text">ExecCorp</span>?
            </h2>
            <p class="text-gray-600" style="font-size: 1.25rem; max-width: 48rem; margin: 0 auto;">
                Combinamos tecnologia de ponta com excelência em serviço para 
                oferecer a melhor experiência em transporte corporativo.
            </p>
        </div>

        <div class="grid grid-cols-4">
            <?php foreach ($features as $index => $feature): ?>
                <div class="feature-card card">
                    <div class="feature-icon">
                        <?php echo $feature['icon']; ?>
                    </div>
                    <h3><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section stats">
    <div class="container">
        <div class="grid grid-cols-4">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item">
                    <div class="stat-value"><?php echo $stat['value']; ?></div>
                    <p class="stat-label"><?php echo $stat['label']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section">
    <div class="container">
        <div class="card text-center" style="max-width: 64rem; margin: 0 auto; padding: 3rem;">
            <h2 class="mb-6">
                Pronto para elevar o padrão do transporte da sua empresa?
            </h2>
            <p class="text-gray-600 mb-8" style="font-size: 1.25rem;">
                Entre em contato conosco e descubra como podemos oferecer uma
                experiência premium em mobilidade corporativa.
            </p>
            <a href="<?php echo url('contato.php'); ?>" class="btn btn-primary">
                Fale Conosco
                <i class="fas fa-arrow-right" style="margin-left: 0.5rem; transition: transform 0.3s ease;"></i>
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 