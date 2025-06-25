<?php
// Template HTML Head
$page_title = $page_title ?? SITE_NAME;
$page_description = $page_description ?? SITE_DESCRIPTION;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="transporte corporativo, transporte executivo, fretamento, mobilidade corporativa">
    <meta name="author" content="<?php echo COMPANY_NAME; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo url(); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo img('hero-car.png'); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo url(); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="<?php echo img('hero-car.png'); ?>">

    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo url('favicon.ico'); ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="<?php echo css('style.css'); ?>">
    
    <!-- CSS adicional da página (se existir) -->
    <?php if (isset($additional_css)): ?>
        <?php foreach ($additional_css as $css_file): ?>
            <link rel="stylesheet" href="<?php echo css($css_file); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo COMPANY_NAME; ?>",
        "url": "<?php echo url(); ?>",
        "logo": "<?php echo img('logo.png'); ?>",
        "description": "<?php echo SITE_DESCRIPTION; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo COMPANY_ADDRESS; ?>"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "<?php echo COMPANY_PHONE; ?>",
            "contactType": "customer service",
            "email": "<?php echo COMPANY_EMAIL; ?>"
        },
        "sameAs": [
            "<?php echo FACEBOOK_URL; ?>",
            "<?php echo INSTAGRAM_URL; ?>",
            "<?php echo LINKEDIN_URL; ?>"
        ]
    }
    </script>
</head>
<body> 