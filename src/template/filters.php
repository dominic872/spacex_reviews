<div class="col-sm-12 col-md-4 col-lg-3 filter-group">
  <div class="filters">
  <strong>Filters</strong>
      <?php
      $filters = './data/filters.json';
      $filters = file_get_contents($filters);
      echo "$data";
      $data = json_decode($filters);
      $i = 0;
      foreach ($data as $key->value){
        echo "<div>";
        echo "<span>".$data[$i]->filter_name."</span>";
        echo "<div class='".$data[$i]->filter_name."'>";

        $j = 0;
        foreach ($data[$i]->data as $key2->value2){
            echo "<button type='button' class='btn btn-success btn-sm'>".$data[$i]->data[$j]."</button>";
          $j = $j+1;
        }
        echo "<h1>".$data[$i]->data[$j]."</h1>";
        echo "</div>";
        echo "</div>";
        $i = $i+1;
        }
      ?>
  </div>
</div>
