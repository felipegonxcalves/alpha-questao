<?php
require_once __DIR__ . '/header_template.php';
require_once __DIR__ . '/functions.php';
validateAuth();

?>
    <form id="form1" action="resolve_questao.php" method="post">

        <input type="hidden" value="11" name="nro_questao">
        <input type="hidden" value="questao12" name="prox_questao">

        <div class="questao" id="q11" style="width: 70vw;height: 430; padding-top: 80px;">
            <div class="numero">11</div>
            <div class="pergunta"> Quando tenho que resolver um problema, eu geralmente...(Marque apenas uma alternativa)

            </div><br><br>
            <div class="alternativas fundoGradient" style="width: auto;margin-left: 1px;">
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> a </div> Visualizo os “fatos”, tratando-os de forma intuitiva e holística
                    <input type="checkbox" name="check_per_1[]" value="a">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> b </div> Organizo os “fatos”, tratando os detalhes de forma realista e
                    cronológica<input type="checkbox" name="check_per_1[]" value="b">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> c </div> Sinto os “fatos”, tratando-os de forma expressiva e interpessoal
                    <input type="checkbox" name="check_per_1[]" value="c">
                    <span class="checkmark"></span>
                </label>
                <label class="linha" style="height: 18px; font-size: 11pt;">
                    <div class="letra"> d </div> Analiso os “fatos”, tratando-os de forma lógica e racional<input type="checkbox" name="check_per_1[]" value="d">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="proximo" id="p11">
                <a>
                    <span class="cinza">Próximo </span>
                    <img class="arrow" src="./righta2.svg">
                    <img class="arrow" src="./righta2.svg">
                </a>
            </div>
        </div>
    </form>

    <script>
        limitarCheckboxes(11, 1);

        document.getElementById('p11').onclick = () => {
            if (validateCheckboxs(11, 1)){
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
