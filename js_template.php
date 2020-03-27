<script>
    function limitarCheckboxes (questao, limite){
        let urlImage1 = '{{ asset('images/righta.svg') }}';
        let urlImage2 = '{{ asset('images/righta2.svg') }}';

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
