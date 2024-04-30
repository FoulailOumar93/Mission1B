<div id="contenu">
<h3>Gestion des Frais</h3>
<form action="index.php?uc=saisie&action=saisie" method="post">
<div class="corpsForm">
<label for="Saisie" style="font-size: 30px;">Saisie</label>

<br><br>
<label for="Visiteur">Visiteur :

    <p>
    <label for="Numero" accesskey="n">Numéro :</label>
    <select id="Numero" name="Numero">
        <?php foreach ($lesVisiteurs as $unVisiteur): ?>
            <option value="<?php echo $unVisiteur['id']; ?>"><?php echo $unVisiteur['id'] ?></option>
        <?php endforeach; ?>
    </select>

     <br> <br>
     <p> Période d'engagement <input id="ok" type="date" value="Mois" size="20" /> </p> 
      </select>
   </p>
   </div>
   <label for="Frais au Forfait" style="font-size: 30px;">Frais au Forfait</label>        
   <br> <br>
   <input id="ok" type="empty" value="" size="20" />        
   <br>
   <input id="ok" type="empty" value="" size="20" />  
   <br>
   <input id="ok" type="empty" value="" size="20" />  
   <br>
   <div class="piedForm">
   <p>
     <input id="ok" type="submit" value="Valider" size="20" />
     <input id="annuler" type="reset" value="Effacer" size="20" />
   </p> 
   </div>
     
   </form>
