<?php
/* Smarty version 3.1.39, created on 2021-05-28 13:47:29
  from '/Applications/MAMP/htdocs/ricketmorty/modules/ax_axleration/views/templates/front/ax_axleration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b0d8517d9190_38256251',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d32115ca50056eb6cadadb2538a13d40a55150d' => 
    array (
      0 => '/Applications/MAMP/htdocs/ricketmorty/modules/ax_axleration/views/templates/front/ax_axleration.tpl',
      1 => 1622202437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b0d8517d9190_38256251 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Block ax_axleration -->
<?php echo '<script'; ?>
 type="text/javascript">
    function init() {
        // Create a request variable and assign a new XMLHttpRequest object to it.
        var request = new XMLHttpRequest()

        // Open a new connection, using the GET request on the URL endpoint
        request.open('GET', 'https://rickandmortyapi.com/api/character', true)

        request.onload = function () {
            // Begin accessing JSON data here
            var data = JSON.parse(this.response)
            setCharacters(data);
        }

        // Send request
        request.send()
    }

    function setCharacters(data){
        var characters = document.getElementById('block_content'); // On récupère la div parent du HTML

        for (let i = 0; i < 5; i++) { // On boucle sur les 5 premiers résultats
            var character = document.createElement('div'); //On crée une div pour chaque personnage
            character.setAttribute("class", "character"); //On lui attribue l'id "character"

            createImg(character, data.results[i].image, "image");
            createDiv(character, data.results[i].name, "name");
            createDiv(character, data.results[i].status, "status");
            createDiv(character, data.results[i].species, "species");
            createDiv(character, data.results[i].gender, "gender");
            createDiv(character, data.results[i].episode, "episode");
            characters.appendChild(character); // On attache à notre div principale notre div character
        }
    }

    // Créer une divison en prenant pour paramètre parent = div parent à laquelle rattacher la 
    //nouvelle div, text = la valeur à afficher, id = l'id de la division
    function createDiv(parent, text, id) {
        var div = document.createElement('div');//Créer une division
        div.setAttribute("class", id); //On lui attribue un id passé en paramètre de la fonction
        div.textContent = text;//On lui attache le texte passé en paramètre de la fonction
        parent.appendChild(div);//On attache cette nouvelle div à une parent existante passé en paramètre de la fonction
    }

    // Créer une image en prenant pour paramètre parent = div parent à laquelle rattacher la nouvelle div, 
    //link=le lien de l'image à afficher, id = l'id de la division  
    function createImg(parent, link, id) {
        var img = new Image(); // Crée un nouvel élément Image
        img.src = link; // Définit le chemin vers sa source via le paramètre de la fonction
        img.class = id; // On lui attribue un id passé en paramètre de la fonction
        parent.appendChild(img); //On attache cette nouvelle div à une parent existante passé en paramètre de la fonction
    }
<?php echo '</script'; ?>
>


<section id="rick-morty container">
    <div id="block_content" class="block_content"></div>
</section>

<?php echo '<script'; ?>
>init();<?php echo '</script'; ?>
>
<!-- /Block ax_axleration -->


<?php }
}
