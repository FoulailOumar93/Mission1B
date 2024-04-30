<div id="contenu">
      <h2><?php echo $_SESSION['prenom']." ".$_SESSION['nom'] ?>  les états des frais :</h2>
      <h3>sélectionner un visiteur et un type de frais : </h3>
      <form action="index.php?uc=etatFrais&action=voirEtatVisiteur" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstVisiteur" accesskey="n">Liste des visiteurs  :</label>
        <select id="lstVisiteur" name="lstVisiteur">
            <?php
			foreach ($lesVisiteurs as $unVisiteur):?>
			{
					<option  value="<?php echo $unVisiteur['id'];?>"><?php echo $unVisiteur['nom']." ".$unVisiteur['prenom'];?></option>
					<?php endforeach ?>	
			}
           
		   ?>    
            
		</select>
        <br>
        <br><label for="lstType" accesskey="n">Types de frais : </label>
        <select id="lstType" name="lstType">
            <?php
			foreach($lesTypes as $unType):?>
			{
				<option  value="<?php echo $unType['id'];?>"><?php echo $unType['libelle'];?></option>
				<?php endforeach ?>
			
			}
			 
		 </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
