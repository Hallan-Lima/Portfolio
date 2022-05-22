<?php
// quantidade de imagens
$qtImg = 7;
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/modelo-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i">
    <meta name="theme-color" content="#478ac9">
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

</html>