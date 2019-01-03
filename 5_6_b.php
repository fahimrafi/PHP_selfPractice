
<?php
function pc_array_power_set($array, $limit){
	$subset = array();
	$results = array(array()); 
	foreach ($array as $element){
		foreach ($results as $combination){
			$result = array_merge(array($element), $combination);
			array_push($results, $result);
			if(count($result) == $limit){
				$subset[] = $result;
			}
		}
	}
	return $subset;
}
$set = range(1, 15);
print_r(pc_array_power_set($set, 2));
