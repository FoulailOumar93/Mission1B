<h3>Frais au forfait</h3>
    <div class="encadre">  	
  	<table class="listeLegere">
  	   <caption>Descriptif du montant des éléments forfait</caption>
             <tr>
                <th class="date">idVisiteur</th>
                <th class="date">Mois</th>
                <th class='montant'>Montant</th>                
             </tr>
        <?php      
          foreach ($lesInfos as $info) 
		  {
		?>
             <tr>
                <td><?php echo $info['idVisiteur'] ?></td>
                <td><?php echo $info['mois'] ?></td>
                <td><?php echo $info['montant'] ?></td>
             </tr>
        <?php 
          }
		?>
    </table>
  </div>

