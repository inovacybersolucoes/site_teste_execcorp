<?php
// Página Termos de Uso
require_once 'includes/config.php';

$page_title = 'Termos de Uso - ' . SITE_NAME;
$page_description = 'Termos de uso dos serviços da ExecCorp - Transporte Corporativo.';

include 'includes/html-head.php';
?>

<!-- Header/Navbar -->
<?php include 'components/header.php'; ?>

<!-- Hero Section -->
<section class="hero" style="min-height: 40vh;">
    <div class="container">
        <div class="hero-content" style="text-align: center;">
            <div class="hero-text">
                <h1>Termos de <span class="gradient-text">Uso</span></h1>
                <p>Última atualização: <?php echo date('d/m/Y'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Content Section -->
<section class="section bg-white">
    <div class="container">
        <div style="max-width: 48rem; margin: 0 auto;">
            <div class="card" style="padding: 3rem;">
                <h2>1. Aceitação dos Termos</h2>
                <p class="mb-6">
                    Ao utilizar os serviços da <?php echo COMPANY_NAME; ?>, você concorda em cumprir 
                    e estar sujeito aos seguintes termos e condições de uso. Se você não concordar 
                    com qualquer parte destes termos, não deverá usar nossos serviços.
                </p>

                <h2>2. Descrição dos Serviços</h2>
                <p class="mb-6">
                    A <?php echo COMPANY_NAME; ?> oferece serviços de transporte corporativo, incluindo:
                </p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Transporte executivo</li>
                    <li>Fretamento corporativo</li>
                    <li>Transporte para eventos</li>
                    <li>Serviços personalizados de mobilidade</li>
                </ul>

                <h2>3. Responsabilidades do Cliente</h2>
                <p class="mb-4">O cliente se compromete a:</p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Fornecer informações precisas e atualizadas</li>
                    <li>Respeitar os horários acordados</li>
                    <li>Tratar motoristas e veículos com respeito</li>
                    <li>Comunicar alterações com antecedência mínima de 2 horas</li>
                    <li>Efetuar pagamentos conforme acordado</li>
                </ul>

                <h2>4. Responsabilidades da Empresa</h2>
                <p class="mb-4">A <?php echo COMPANY_NAME; ?> se compromete a:</p>
                <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                    <li>Fornecer veículos em bom estado de conservação</li>
                    <li>Disponibilizar motoristas qualificados e habilitados</li>
                    <li>Manter seguro contra acidentes e responsabilidade civil</li>
                    <li>Garantir pontualidade nos serviços contratados</li>
                    <li>Respeitar a privacidade e confidencialidade dos clientes</li>
                </ul>

                <h2>5. Pagamentos e Cancelamentos</h2>
                <p class="mb-4">
                    Os pagamentos deverão ser efetuados conforme as condições estabelecidas 
                    no contrato específico. Cancelamentos devem ser comunicados com antecedência 
                    mínima de 4 horas, caso contrário, poderá ser cobrada taxa de cancelamento.
                </p>

                <h2>6. Limitação de Responsabilidade</h2>
                <p class="mb-6">
                    A responsabilidade da <?php echo COMPANY_NAME; ?> limita-se aos danos 
                    diretamente relacionados à prestação do serviço de transporte, estando 
                    excluída qualquer responsabilidade por danos indiretos, lucros cessantes 
                    ou prejuízos de ordem moral.
                </p>

                <h2>7. Propriedade Intelectual</h2>
                <p class="mb-6">
                    Todos os direitos de propriedade intelectual relacionados aos serviços, 
                    incluindo marca, logotipo e materiais promocionais, são de propriedade 
                    exclusiva da <?php echo COMPANY_NAME; ?>.
                </p>

                <h2>8. Modificações dos Termos</h2>
                <p class="mb-6">
                    A <?php echo COMPANY_NAME; ?> reserva-se o direito de modificar estes 
                    termos a qualquer momento. As alterações entrarão em vigor imediatamente 
                    após sua publicação no site oficial.
                </p>

                <h2>9. Lei Aplicável</h2>
                <p class="mb-6">
                    Estes termos são regidos pelas leis brasileiras. Qualquer disputa será 
                    resolvida no foro da comarca de São Gonçalo do Amarante/RN.
                </p>

                <h2>10. Contato</h2>
                <p>
                    Para dúvidas sobre estes termos, entre em contato conosco através do 
                    e-mail <?php echo COMPANY_EMAIL; ?> ou telefone <?php echo COMPANY_PHONE; ?>.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include 'components/footer.php'; ?>

<?php include 'includes/html-footer.php'; ?> 