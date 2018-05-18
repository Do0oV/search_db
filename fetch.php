	<?php
  include 'conndb.php';

  if(isset($_REQUEST['get_val']) && !empty($_REQUEST['get_val']))
  {
   $term = htmlspecialchars($_REQUEST['get_val']);

   $response = $db->prepare( "SELECT * FROM country WHERE name LIKE :term");
   $response->execute(array(
    'term' => '%'.$term.'%'
  ));



   while ($donnees = $response->fetch())
   {


    echo '<div class="col s12 m6">
    <h5 class="header">'.$donnees['name'].'</h5>
    <div class="card horizontal grey lighten-2">
    <div class="card-image">
    <img src="http://www.countryflags.io/'.$donnees['code2l'].'/flat/64.png">
    </div>
    <div class="card-stacked">
    <div class="card-content">
    <p class="">Code Pays</p>
    <p class="">'.$donnees['code3l'].'</p>
    </div>
    </div>
    </div>
    </div>';


  }
  exit;
}
?>