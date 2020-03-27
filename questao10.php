<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="10" name="nro_questao">
        <input type="hidden" value="questao11" name="prox_questao">

        <div class="questao" id="q10" style="width: 80vw;height: 430;">
            <div class="numero">10</div>
            <div class="pergunta"> Quais as frases depreciativas que você mais ouve dos outros falarem a seu respeito?
                (Marque cinco alternativas)
            </div><br>
            <div class="alternativas fundoGradient" style="width: 280px;float: left;">
                <label class="linha">
                    <div class="letra"> a </div> Viciado em números <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> b </div> Coração mole<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> c </div> Exigente, esforçado<input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> d </div> Vive no mundo da lua<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> e </div> Tem sede de poder<input type="checkbox" name="check_per_1[]" value="e">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> f </div> Fala demais<input type="checkbox" name="check_per_1[]" value="f">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> g </div> Não decide sozinho<input type="checkbox" name="check_per_1[]" value="g">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> h </div> Não sabe se concentrar <input type="checkbox" name="check_per_1[]" value="h">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> i </div> Frio, insensível<input type="checkbox" name="check_per_1[]" value="i">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> j </div> Fácil de convencer<input type="checkbox" name="check_per_1[]" value="j">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="alternativas fundoGradient" style="width: 270px;float: right;">
                <label class="linha">
                    <div class="letra"> k </div> Sem imaginação<input type="checkbox" name="check_per_1[]" value="k">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> l </div> Maluco<input type="checkbox" name="check_per_1[]" value="l">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> m </div> Calculista<input type="checkbox" name="check_per_1[]" value="m">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> n </div> Ingênuo <input type="checkbox" name="check_per_1[]" value="n">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> o </div> Bitolado<input type="checkbox" name="check_per_1[]" value="o">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> p </div> Inconsequente<input type="checkbox" name="check_per_1[]" value="p">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> q </div> Não se mistura<input type="checkbox" name="check_per_1[]" value="q">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> r </div> Ultrassensível<input type="checkbox" name="check_per_1[]" value="r">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> s </div> Quadrado<input type="checkbox" name="check_per_1[]" value="s">
                    <span class="checkmark"></span>
                </label>
                <label class="linha">
                    <div class="letra"> t </div> Sem disciplina<input type="checkbox" name="check_per_1[]" value="t">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p10">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta2.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>
    </form>

    <script>
        limitarCheckboxes(10, 5);

        document.getElementById('p10').onclick = () => {
            if (validateCheckboxs(10, 5)){
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
