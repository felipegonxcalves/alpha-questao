<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="5" name="nro_questao">
        <input type="hidden" value="questao06" name="prox_questao">

        <div class="questao" id="q5" style="width: 72vw;height: 430;">
            <div class="numero">05</div>
            <div class="pergunta"> Assinale o que mais gosta de fazer. (Marque quatro alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 250px;float: left;">
                <label class="linha">
                    <div class="letra"> a </div> Descobrir <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> b </div> Quantificar <input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> c </div> Envolver <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> d </div> Organizar <input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> e </div> Conceituar <input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> f </div> Analisar <input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> g </div> Sentir <input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> h </div> Praticar <input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 260px;float: right;">
                <label class="linha">
                    <div class="letra"> i </div> Teorizar <input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> j </div> Sintetizar <input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> k </div> Avaliar <input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> l </div> Interiorizar <input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> m </div> Processar <input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> n </div> Ordenar <input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> o </div> Explorar <input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> p </div> Compartilhar <input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p5">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>

    </form>

    <script>
        limitarCheckboxes(5, 4);

        document.getElementById('p5').onclick = () => {
            if (validateCheckboxs(5, 4)){
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
