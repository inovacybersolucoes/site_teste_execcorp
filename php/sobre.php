<?php
// Página Sobre
require_once 'includes/config.php';

$page_title = 'Sobre Nós - ' . SITE_NAME;
$page_description = 'Conheça a história, missão e valores da ExecCorp, líder em transporte corporativo premium.';

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 60vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div class="hero-text">
                <h1>Sobre a <span class="gradient-text">ExecCorp</span></h1>
                <p>
                    Transformando a mobilidade corporativa através da inovação,
                    excelência e compromisso com nossos clientes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- História Section -->
<section class="section">
    <div class="container">
        <div class="grid grid-cols-2" style="align-items: center; gap: 4rem;">
            <div>
                <h2 class="mb-6">Nossa História</h2>
                <p class="text-gray-600 mb-4">
                    Fundada com o objetivo de revolucionar o transporte corporativo no Brasil, 
                    a ExecCorp nasceu da visão de oferecer soluções premium de mobilidade 
                    que combinassem tecnologia de ponta com excelência em atendimento.
                </p>
                <p class="text-gray-600 mb-4">
                    Desde o início, nosso foco tem sido superar as expectativas dos clientes,
                    fornecendo serviços que não apenas atendem, mas antecipam suas necessidades
                    de transporte corporativo.
                </p>
                <p class="text-gray-600">
                    Hoje, somos reconhecidos como líderes no setor, atendendo mais de 200 empresas
                    em todo o país com nossa frota premium e equipe altamente qualificada.
                </p>
            </div>
            <div style="text-align: center;">
                <img src="<?php echo img('hero-car.png'); ?>" 
                     alt="Frota ExecCorp" 
                     style="max-width: 100%; height: auto; border-radius: 1rem;">
            </div>
        </div>
    </div>
</section>

<!-- Valores Section -->
<section class="section bg-gray-50">
    <div class="container">
        <div class="text-center mb-8">
            <h2>Nossos <span class="gradient-text">Valores</span></h2>
            <p class="text-gray-600" style="font-size: 1.25rem; max-width: 48rem; margin: 0 auto;">
                Os princípios que guiam cada decisão e ação da nossa empresa.
            </p>
        </div>

        <div class="grid grid-cols-4">
            <?php foreach ($company_values as $value): ?>
                <div class="card text-center" style="padding: 2rem;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">
                        <?php echo $value['icon']; ?>
                    </div>
                    <h3 class="mb-4"><?php echo $value['title']; ?></h3>
                    <p class="text-gray-600"><?php echo $value['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Números Section -->
<section class="section stats">
    <div class="container">
        <div class="text-center mb-8">
            <h2 class="text-white mb-4">ExecCorp em Números</h2>
            <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.25rem;">
                Resultados que comprovam nossa excelência
            </p>
        </div>

        <div class="grid grid-cols-4">
            <?php foreach ($company_stats as $stat): ?>
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
        <div class="text-center">
            <h2 class="mb-6">Faça parte da nossa história</h2>
            <p class="text-gray-600 mb-8" style="font-size: 1.25rem; max-width: 48rem; margin: 0 auto 2rem;">
                Junte-se às centenas de empresas que já confiam na ExecCorp 
                para suas necessidades de transporte corporativo.
            </p>
            <a href="<?php echo url('contato.php'); ?>" class="btn btn-primary">
                Entre em Contato
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 