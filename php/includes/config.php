<?php
// Configurações gerais do site ExecCorp

// Informações da empresa
define('SITE_NAME', 'ExecCorp - Transporte Corporativo');
define('SITE_DESCRIPTION', 'Soluções premium de transporte corporativo inteligente');
define('COMPANY_NAME', 'ExecCorp');
define('COMPANY_EMAIL', 'contato@execcorp.com.br');
define('COMPANY_PHONE', '+55 (84) 3000-0000');
define('COMPANY_ADDRESS', 'Rua Principal, 1000 - São Gonçalo do Amarante - RN, 59290-000');

// URLs das redes sociais
define('FACEBOOK_URL', 'https://facebook.com');
define('INSTAGRAM_URL', 'https://instagram.com');
define('LINKEDIN_URL', 'https://linkedin.com');

// Configurações do site
define('BASE_PATH', '/php');
define('ASSETS_PATH', BASE_PATH . '/assets');
define('CSS_PATH', BASE_PATH . '/css');
define('JS_PATH', BASE_PATH . '/js');
define('IMAGES_PATH', BASE_PATH . '/images');

// Funcção para gerar URLs
function url($path = '') {
    return BASE_PATH . ($path ? '/' . ltrim($path, '/') : '');
}

// Função para assets
function asset($path) {
    return ASSETS_PATH . '/' . ltrim($path, '/');
}

// Função para CSS
function css($file) {
    return CSS_PATH . '/' . ltrim($file, '/');
}

// Função para JS
function js($file) {
    return JS_PATH . '/' . ltrim($file, '/');
}

// Função para imagens
function img($file) {
    return IMAGES_PATH . '/' . ltrim($file, '/');
}

// Função para sanitizar dados
function sanitize($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// Função para obter a página atual
function current_page() {
    $page = $_GET['page'] ?? 'home';
    return sanitize($page);
}

// Função para verificar se é a página atual
function is_current_page($page) {
    return current_page() === $page;
}

// Dados das features/diferenciais
$features = [
    [
        'icon' => '🚙',
        'title' => 'Frota Premium',
        'description' => 'Veículos executivos de luxo com todo conforto e segurança para suas viagens.'
    ],
    [
        'icon' => '📱',
        'title' => 'App Exclusivo',
        'description' => 'Gestão completa das viagens com nosso aplicativo desenvolvido para executivos.'
    ],
    [
        'icon' => '🛡️',
        'title' => 'Máxima Segurança',
        'description' => 'Motoristas altamente treinados e monitoramento em tempo real de todas as viagens.'
    ],
    [
        'icon' => '👥',
        'title' => 'Suporte VIP',
        'description' => 'Atendimento personalizado 24/7 para garantir a melhor experiência.'
    ]
];

// Dados das estatísticas
$stats = [
    ['value' => '+200', 'label' => 'Empresas Parceiras'],
    ['value' => '+1000', 'label' => 'Veículos na Frota'],
    ['value' => '+100k', 'label' => 'Viagens Realizadas'],
    ['value' => '99%', 'label' => 'Satisfação dos Clientes']
];

// Dados dos serviços
$services = [
    [
        'title' => 'Transporte Executivo',
        'description' => 'Serviço premium de transporte para executivos com carros de luxo e motoristas altamente treinados.',
        'icon' => '🚙',
        'features' => [
            'Carros executivos de luxo',
            'Motoristas bilíngues',
            'Wi-Fi a bordo',
            'Água e amenidades'
        ]
    ],
    [
        'title' => 'Fretamento Corporativo',
        'description' => 'Soluções de transporte regular para colaboradores com rotas otimizadas e monitoramento em tempo real.',
        'icon' => '🚐',
        'features' => [
            'Rotas personalizadas',
            'Monitoramento GPS',
            'Relatórios de utilização',
            'App para colaboradores'
        ]
    ],
    [
        'title' => 'Eventos Corporativos',
        'description' => 'Transporte especializado para eventos empresariais, convenções e treinamentos.',
        'icon' => '🎯',
        'features' => [
            'Coordenação logística',
            'Veículos padronizados',
            'Equipe de suporte',
            'Plano de contingência'
        ]
    ]
];

// Dados dos valores da empresa
$company_values = [
    [
        'title' => 'Inovação',
        'description' => 'Buscamos constantemente novas tecnologias e soluções para melhorar a experiência de transporte.',
        'icon' => '💡'
    ],
    [
        'title' => 'Segurança',
        'description' => 'Priorizamos a segurança em todas as nossas operações, desde a seleção de motoristas até a manutenção da frota.',
        'icon' => '🛡️'
    ],
    [
        'title' => 'Sustentabilidade',
        'description' => 'Comprometidos com práticas sustentáveis e redução do impacto ambiental.',
        'icon' => '🌱'
    ],
    [
        'title' => 'Excelência',
        'description' => 'Buscamos a excelência em cada detalhe do nosso serviço para superar as expectativas.',
        'icon' => '⭐'
    ]
];

// Dados dos números da empresa (página sobre)
$company_stats = [
    ['value' => '+100', 'label' => 'Empresas Atendidas'],
    ['value' => '+500', 'label' => 'Veículos na Frota'],
    ['value' => '+50k', 'label' => 'Viagens Realizadas'],
    ['value' => '98%', 'label' => 'Satisfação dos Clientes']
];
?> 