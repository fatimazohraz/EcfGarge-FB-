<?php
include('../header.php');

?>
<!-- debut code formulaire de contacte user-->

<form action="fichier.php" method="post">
        <div>
            <label for="nom">nom</label>
            <input type="text"  name="nom" id="nom">
        </div>  

        <div>
            <label for="prenom">prénom</label>
             <input type="text" name="prenom" id="prenom">
        </div>

        <div>
            <label for="mail" >e-mail</label> 
            <input type="email" name="mail" id="mail">
        </div>
        
        <div>
            <label for="tel">tel</label> 
            <input type="tel" name="tel" id="tel">
        </div>

        <div>
            <label for="message">message</label>
             <input type="text" name="message" id="message">
        </div>
        
        <div>
            <input type="submit" value="envoyer">
        </div>
        
    </form>

    <!-- fin code formulaire de contacte user-->

<?php
include_once('../footer.php');
?>
