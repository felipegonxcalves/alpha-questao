<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="23" name="nro_questao">
        <input type="hidden" value="questao24" name="prox_questao">

        <div class="questao" id="q23" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">23</div>
            <div class="pergunta">Eu gosto de chegar...</div><br><br>
            <div class="alternativas fundoGradient" style="width:auto; margin-left:1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">A</div> Na frente <input type="checkbox" name="check_per_1[]" value="a"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">C</div> Junto <input type="checkbox" name="check_per_1[]" value="c"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">O</div> Na hora <input type="checkbox" name="check_per_1[]" value="o"> <span class="checkmark"> </span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra">I</div> Em outro lugar <input type="checkbox" name="check_per_1[]" value="i"> <span class="checkmark"> </span>
                </label>
            </div>
            <div class="proximo" id="p23">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta2.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>
    </form>

    <script>
        limitarCheckboxes(23, 1);

        document.getElementById('p23').onclick = () => {
            if (validateCheckboxs(23, 1)){
                document.getElementById('form1').submit();
            }
        }

        function limitarCheckboxes (questao, limite){

            let urlImage1 = './righta.svg';
            let urlImage2 = './righta2.svg';

            let Checkboxes = $( "#q" + questao + " input[type='checkbox']");
            Checkboxes.click(function()
            {
                if (Checkboxes.filter(":checked").length > limite)
                    $(this).removeAttr("checked");
                if (Checkboxes.filter(":checked").length == limite)
                {
                    var proximo = $( "#p" + questao + " span");
                    proximo.removeClass("cinza");
                    proximo.addClass("azul");
                    var imagens = $( "#p"+ questao + " img");
                    imagens.attr("src", urlImage1);
                    $("#p"+ questao + " a").attr("href","#q" + (questao+1));
                    $("#p"+ questao + " a").css("cursor","pointer");


                }else{
                    var proximo = $( "#p" + questao + " span");
                    proximo.removeClass("azul");
                    proximo.addClass("cinza");
                    var imagens = $( "#p"+ questao + " img");
                    imagens.attr("src", urlImage2);
                    $("#p"+ questao + " a").removeAttr("href");
                    $("#p"+ questao + " a").css("cursor","no-drop");

                }
            });
        }

        function validateCheckboxs(questao, limite) {
            let Checkboxes = $( "#q" + questao + " input[type='checkbox']");
            if (Checkboxes.filter(":checked").length == limite)
            {
                return true;
            }else{
                return false;
            }
        }
    </script>

<?php
    require_once __DIR__ . '/footer_template.php';
?>
