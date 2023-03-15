<?php


	function kelulusan($winRate){
		if($winRate >= 55 ){
            echo " <td> LULUS </td>";

    
        }else {
            echo  " <td> TIDAK LULUS </td>";
        }
	}
	
	function grade($winRate) {
	    if($winRate <= 35 ){
             echo "<td> E </td>";
    
        } elseif ($winRate <= 55) {
            echo "<td> D </td>";
        } elseif ($winRate >= 69) {
            echo "<td> C </td>";
        } elseif ($winRate >= 84) {
            echo "<td> B </td>";
        } elseif ($winRate >= 100) {
            echo "<td> A </td>";
        } else {
            echo "<td> I </td>";
        }
	}
	
	function predikat($winRate) {
        switch ($winRate){
            case ($winRate>= 0 && $winRate<= 35):
                echo "<td> Sangat kurang </td>";
                break;
            case ($winRate>= 36 && $winRate<= 55):
                echo "<td> Kurang </td>";
                break;
            case ($winRate>= 56 && $winRate<= 69):
                echo "<td> Cukup </td>";
                break;
            case ($winRate>= 70 && $winRate<= 84):
                echo "<td> Memuaskan </td>";
                break;
            case ($winRate>= 85 ):
                echo "<td> Sangat puas </td>";
                break;
            default: 
                echo "<td> Tidak ada </td>";
                break;
        }
	}
?>