<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>

    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="9" name="nro_questao">
        <input type="hidden" value="questao10" name="prox_questao">

        <div class="questao" id="q9" style="width: 80vw;height: 430;">
            <div class="numero">09</div>
            <div class="pergunta"> Palavras que definem seu estilo. (Marque quatro alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 260px;float: left;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> a </div>Organizado<input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> b </div> Analítico<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> c </div> Emocional<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> d </div> Experimental<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> e </div> Lógico<input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> f </div> Conceitual<input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> g </div> Perceptivo<input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> h </div> Sequencial<input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 300px;float: right;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> i </div> Cinestésico<input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> j </div> Teórico<input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> k </div> Explorador<input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> l </div> Avaliador<input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> m </div> Sentimental<input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> n </div> Preparado<input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> o </div>Quantitativo <input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> p </div> Sintético<input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p9">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta2.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>
    </form>

    <script>
        limitarCheckboxes(9, 4);

        document.getElementById('p9').onclick = () => {
            if (validateCheckboxs(9, 4)){
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
