<?php
  $output['name'] = 'Colombia';
  $dep = array();
  $cit = array();
  $ope = array();
  $departamento = "";
  $municipio = "";
  if (($handle = fopen("assets/data/Zonas_WiFi_Gratis_Para_la_Gente_-_DPTIC_-_Nacional.csv", "r")) !== FALSE) {
    $header = array();
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      if(empty($header)){
        $header = $data;
      }else{
        $d = array();
        $row = array();
        foreach ($data as $key => $value) {
          $d[$header[$key]] = $value;
        }
      }

      if(!empty($d['DEPARTAMENTO'])){
        if($departamento != $d['DEPARTAMENTO']){
          $departamento = $d['DEPARTAMENTO'];
          $cit = array();
        }
        if($municipio != $d['MUNICIPIO']){
          $municipio = $d['MUNICIPIO'];
          $ope = array();
        }
        
        if(!in_array($d['DEPARTAMENTO'], $dep)){
          $dep[] = $d['DEPARTAMENTO'];
        }
        if(!in_array($d['MUNICIPIO'], $cit)){
          $cit[] = $d['MUNICIPIO'];
        }
        if(!in_array($d['OPERADOR'], $ope)){
          $ope[] = $d['OPERADOR'];
        }

        $dep_key = array_search($d['DEPARTAMENTO'], $dep);
        $cit_key = array_search($d['MUNICIPIO'], $cit);
        $ope_key = array_search($d['OPERADOR'], $ope);

        $output['children'][$dep_key]['name'] = $d['DEPARTAMENTO'];
        $output['children'][$dep_key]['children'][$cit_key]['name'] = $d['MUNICIPIO'];
        //$output['children'][$dep_key]['children'][$cit_key]['size'] = isset($output['children'][$dep_key]['children'][$cit_key]['size'])? $output['children'][$dep_key]['children'][$cit_key]['size'] + 1 : 1;
        $output['children'][$dep_key]['children'][$cit_key]['children'][$ope_key]['name'] = $d['OPERADOR'];
        $output['children'][$dep_key]['children'][$cit_key]['children'][$ope_key]['size'] = isset($output['children'][$dep_key]['children'][$cit_key]['children'][$ope_key]['size'])? $output['children'][$dep_key]['children'][$cit_key]['children'][$ope_key]['size'] + 1 : 1;
      }
    }
    
    fclose($handle);

    $fp = fopen('assets/data/tree.json', 'w');
    fwrite($fp, json_encode($output));
    fclose($fp);
  }
?>
<pre><?php print_r($output); ?></pre>