    $(document).ready(function() {
        $('a').click(function() {
        $('a.active').removeClass("active"); //aqui removemos a class do item anteriormente clicado para que possamos adicionar ao item clicado
        $(this).addClass("active"); //aqui adicionamos a class ao item clicado
    });
    });

    function habilitar(){
        if(document.getElementById('assistido').checked){
            document.getElementById('favorito').disabled = false;
            document.getElementById('nota').disabled = false;
            document.getElementById('data').disabled = false;
            document.getElementById('backg').disabled = false;
            document.getElementById('sinopse').disabled = false;
            document.getElementById('genero1').disabled = false;
            document.getElementById('genero2').disabled = false;
            document.getElementById('genero3').disabled = false;
        }else{
            document.getElementById('favorito').disabled = true;
            document.getElementById('nota').disabled = true;
            document.getElementById('data').disabled = true;
            document.getElementById('backg').disabled = true;
            document.getElementById('sinopse').disabled = true;
            document.getElementById('genero1').disabled = true;
            document.getElementById('genero2').disabled = true;
            document.getElementById('genero3').disabled = true;
        }
    }

    function habilitar_interesse(){
        if(document.getElementById('interesse').clicked){
            document.getElementById('body-interesse').style.display = 'none'
            document.getElementById('body-assistido').style.display = "block";
            document.getElementById('body-favorito').style.display = "block";
            document.getElementById('body-home').style.display = "block";
        }else{
            document.getElementById('body-interesse').style.display = 'block';
            document.getElementById('body-assistido').style.display = "none";
            document.getElementById('body-favorito').style.display = "none";
            document.getElementById('body-home').style.display = "none";
        }
    }

    function habilitar_assistido(){
        if(document.getElementById('assistido').clicked){
            document.getElementById('body-assistido').style.display = 'none';
            document.getElementById('body-interesse').style.display = "block";
            document.getElementById('body-favorito').style.display = "block";
            document.getElementById('body-home').style.display = "block";
        }else{
            document.getElementById('body-interesse').style.display = 'none';
            document.getElementById('body-assistido').style.display = "block";
            document.getElementById('body-favorito').style.display = "none";
            document.getElementById('body-home').style.display = "none";
        }
    }

    function habilitar_favorito(){
        if(document.getElementById('favorito').clicked){
            document.getElementById('body-interesse').style.display = 'block';
            document.getElementById('body-assistido').style.display = "block";
            document.getElementById('body-favorito').style.display = "none";
            document.getElementById('body-home').style.display = "block";
        }else{
            document.getElementById('body-interesse').style.display = 'none';
            document.getElementById('body-assistido').style.display = "none";
            document.getElementById('body-favorito').style.display = "block";
            document.getElementById('body-home').style.display = "none";
        }
    }

    function habilitar_home(){
        if(document.getElementById('home').clicked){
            document.getElementById('body-interesse').style.display = 'block';
            document.getElementById('body-assistido').style.display = "block";
            document.getElementById('body-favorito').style.display = "block";
            document.getElementById('body-home').style.display = "none";
        }else{
            document.getElementById('body-interesse').style.display = 'none';
            document.getElementById('body-assistido').style.display = "none";
            document.getElementById('body-favorito').style.display = "none";
            document.getElementById('body-home').style.display = "block";
        }
    }

    // CAROUSEL HOME -> painel.scrollLeft -= 260;