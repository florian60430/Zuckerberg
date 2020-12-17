//ajax se lancera que sur un clic de la balise qui porte id GoAjax
function loadAjax() {

    $("#img1").click(function() {

        //appel fonction ajax de jQuery
        $.ajax(
            //données aux format JSON
            {
                url: 'traitement.php',
                type: 'GET',
                dataType: 'html',
                data: 'img=' + '1',
                //success est lancé si ajax ok
                //code_html sera envoyé par ajax vers la fonction c’est le retour //du server web
                success: function(code_html, statut) {
                    $("#game").html(code_html);
                    // On passe code_html à jQuery() qui va nous créer l'arbre DOM !
                    loadAjax();

                },
                //error est lancé si ajax à eu une effeur
                error: function(resultat, statut, erreur) {},
                //complete est lancé si ajax a fini 
                complete: function(resultat, statut) {}
                    //fin des données jSon
            });
        //fin de l’appel ajax 
    });

    $("#img2").click(function() {

        //appel fonction ajax de jQuery
        $.ajax(
            //données aux format JSON
            {
                url: 'traitement.php',
                type: 'GET',
                dataType: 'html',
                data: 'img=' + '2',
                //success est lancé si ajax ok
                //code_html sera envoyé par ajax vers la fonction c’est le retour //du server web
                success: function(code_html, statut) {
                    $("#game").html(code_html);
                    // On passe code_html à jQuery() qui va nous créer l'arbre DOM !

                    loadAjax();
                },
                //error est lancé si ajax à eu une effeur
                error: function(resultat, statut, erreur) {},
                //complete est lancé si ajax a fini 
                complete: function(resultat, statut) {}
                    //fin des données jSon
            });
        //fin de l’appel ajax 
    });
}

loadAjax();