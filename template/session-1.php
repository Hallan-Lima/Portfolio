<?php
// quantidade de imagens
$qtImg = 7;
?>

<head>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/modelo-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
</head>

<body class="u-body u-overlap u-overlap-contrast u-xl-mode">
    <section class="u-clearfix u-palette-1-light-1 u-section-5" id="carousel_287b">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">
                    <?php
                    for ($i=1; $i < $qtImg ; $i++) { 
                    echo '
                    <div class="u-effect-fade u-gallery-item">
                        <div class="u-back-slide" >
                            <img class="u-back-image u-expanded" src="../img/'.$i.'.png">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                    </div> 
                    ';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>