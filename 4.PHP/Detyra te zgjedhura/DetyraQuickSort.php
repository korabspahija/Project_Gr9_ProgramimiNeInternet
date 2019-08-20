<?php 
    $unsorted = array('hello','test_php', 'y','alfa');
    function quicksort($array) {
        if (count($array) == 0) {
        	return array();
        }
 
        $pivot = $array[0];
        $left = $right = array();
 		
        foreach($array as $key => $value) {
        	if ($value < $pivot) {
        		$left[] = $value;
        	} else {
        		$right[] = $value;
        	}
        }
        
 		return array_merge(quicksort($left), array($pivot), quicksort($right));
    }

    echo '<pre>';
    $sorted = quicksort($unsorted);
    print_r($sorted);
?>