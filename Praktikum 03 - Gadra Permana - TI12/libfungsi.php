<?php
    function kelulusan($nilai) {
        if ($nilai >= 55 ){
            return 'LULUS';
        }else {
            return 'TIDAK LULUS';
        }
    }

    function grade($nilai) {
        if ($nilai >= 83){
            return 'A';
        }elseif($nilai >= 73){
           return 'B';
        }elseif($nilai >= 55){
            return 'C';
        }elseif($nilai >= 35){
            return 'D';
        }elseif ($nilai >= 5){
            return 'E';
        }else{
            return '(tidak ada nilai)';
        }
    }

    function predikat($grade){
        switch ($grade)
        {
            case 'A':
                return "(Sangat Memuaskan)";
                break;
    
            case 'B':
                return "(Memuaskan)";
                break;

            case 'C':
                return "(Cukup)";
                break;

            case 'D':
                return "(Kurang)";
                break;

            case 'E':
                return "(Sangat Kurang)";
                break;
        }   
    }
?>