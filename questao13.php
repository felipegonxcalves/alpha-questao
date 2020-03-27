<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="13" name="nro_questao">
        <input type="hidden" value="questao14" name="prox_questao">

        <div class="questao" id="q13" style="width: 80vw;height: 430;">
            <div class="numero">13</div>
            <div class="pergunta"> Palavras que definem seu estilo. (Marque quatro alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 300px;float: left;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> a </div> Sempre fazemos desta forma
                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> b </div> Vamos ao ponto-chave do problema
                    <input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> c </div> Vejamos os valores humanos
                    <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> d </div> Vamos analisar
                    <input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> e </div> Vamos ver o quadro geral
                    <input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> f </div>Vamos ver o desenvolvimento da equipe
                    <input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> g </div> Vamos conhecer o resultado
                    <input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> h </div> Este é o grande sucesso conceitual
                    <input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 290px;float: right;">
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> i </div> Vamos manter a lei e a ordem
                    <input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> j </div> Vamos inovar e criar sinergia
                    <input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> k </div> Vamos participar e envolver
                    <input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="font-size:10pt">
                    <div class="letra"> l </div> É mais seguro desta forma<input type="checkbox" name="check_per_1[]" value="l">
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
            <div class="proximo" id="p13">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta2.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>

    </form>

    <script>
        limitarCheckboxes(13, 4);

        document.getElementById('p13').onclick = () => {
            if (validateCheckboxs(13, 4)){
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
