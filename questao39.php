<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="" method="post">


        <div class="questao" id="q39" style="width: 85vw; ">
            <div>
                <div class="fundoGradient" style="height: 320px;width: 715px;border-radius: 5px;">
                    <div id="final" class="azul">
                        <span>Seu teste foi enviado com sucesso!</span>
                    </div>
                    <!-- <button id="fechar" onclick="fechar()">FECHAR</button> -->
                </div>
            </div>
        </div>
    </form>

    <script>
        // limitarCheckboxes(39, 1);
        //
        // document.getElementById('p3').onclick = () => {
        //     if (validateCheckboxs(39, 1)){
        //         document.getElementById('form1').submit();
        //     }
        // }
    </script>

<?php
    require_once __DIR__ . '/footer_template.php';
?>
