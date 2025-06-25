<?php
// Componente Slideshow
$images = [
    img('hero-car.png'),
    img('im.png')
    // Adicionar mais imagens aqui quando disponíveis
];
?>

<div class="slideshow-container" style="position: relative; height: 500px; overflow: hidden; border-radius: 1rem;">
    <?php foreach ($images as $index => $image): ?>
        <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>" 
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: <?php echo $index === 0 ? '1' : '0'; ?>; transition: opacity 0.5s ease;">
            <img src="<?php echo $image; ?>" 
                 alt="Slide <?php echo $index + 1; ?>" 
                 style="width: 100%; height: 100%; object-fit: contain;"
                 loading="lazy">
        </div>
    <?php endforeach; ?>

    <!-- Botões de Navegação -->
    <?php if (count($images) > 1): ?>
        <button class="slide-prev" 
                style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); 
                       background: rgba(0,0,0,0.5); color: white; border: none; 
                       border-radius: 50%; width: 3rem; height: 3rem; font-size: 1.5rem; 
                       cursor: pointer; transition: all 0.3s ease; z-index: 10;">
            <i class="fas fa-chevron-left"></i>
        </button>
        
        <button class="slide-next" 
                style="position: absolute; right: 1rem; top: 50%; transform: translateY(-50%); 
                       background: rgba(0,0,0,0.5); color: white; border: none; 
                       border-radius: 50%; width: 3rem; height: 3rem; font-size: 1.5rem; 
                       cursor: pointer; transition: all 0.3s ease; z-index: 10;">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Indicadores -->
        <div class="slide-indicators" 
             style="position: absolute; bottom: 1rem; left: 50%; transform: translateX(-50%); 
                    display: flex; gap: 0.5rem; z-index: 10;">
            <?php foreach ($images as $index => $image): ?>
                <button class="slide-indicator <?php echo $index === 0 ? 'active' : ''; ?>" 
                        data-slide="<?php echo $index; ?>"
                        style="width: <?php echo $index === 0 ? '1rem' : '0.5rem'; ?>; height: 0.5rem; 
                               background: <?php echo $index === 0 ? 'white' : 'rgba(255,255,255,0.5)'; ?>; 
                               border: none; border-radius: 0.25rem; cursor: pointer; 
                               transition: all 0.3s ease;">
                </button>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<style>
/* Estilos específicos do slideshow */
.slideshow-container .slide-prev:hover,
.slideshow-container .slide-next:hover {
    background: rgba(0,0,0,0.7);
    transform: translateY(-50%) scale(1.1);
}

.slideshow-container .slide-indicator.active {
    width: 1rem !important;
    background: white !important;
}

.slideshow-container .slide-indicator:hover {
    background: rgba(255,255,255,0.8) !important;
}
</style> 