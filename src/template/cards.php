<div class="col-sm-12 col-md-8 col-lg-9 products">
  <div class="row product-group">
    <?php
    $card = './data/json.json'; // path to your JSON file
    $url2 = 'https://api.spacexdata.com/v3/launches?limit=100'; // path to your JSON file
    $url3 = 'https://api.spaceXdata.com/v3/launches?limit=100&launch_success=true'; // path to your JSON file
    $json = file_get_contents($card);

    $data = json_decode($json);

    $i = 0;
    foreach ($data as $key->value){
      //echo "$data[0]->flight_number";

    echo "<div class='col-sm-12 col-md-6 col-lg-4 product-tile'>";
    echo "<div class='display-product'>";
    echo "<img src='".$data[$i]->links->mission_patch_small."' alt='".$data[$i]->details."' loading='lazy' width='100%' height='100%'/><br />";
    echo "<ul><li><strong>".$data[$i]->mission_name ." #".$data[$i]->flight_number."</strong></li>";

    echo "<li><strong>Mission IDs: </strong>";

    if(count($data[$i]->mission_id) === 0)
    echo "No ID Found";
    else {
      foreach ($data[$i]->mission_id as &$value) {
          echo $value;
      }
    }

    echo "</li>";
    echo "<li><strong>Launch Year: </strong>".$data[$i]->launch_year."</li>";
    echo "<li><strong>Successfull Launch: </strong>";
    if($data[$i]->launch_success==1)
    echo "true";
    else
    echo "false";
    echo "</li></ul>";


    echo "</div>\n</div>";
    $i = $i+1;
    }



    ?>

  </div>
</div>
