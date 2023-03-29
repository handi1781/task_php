<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kuisController extends Controller
{
    
    public function kuis()
    {
    $a=1;
    $b=100;
    $format=number_format($a,2);
    
    for ($i=$format;$i<=$b;$i++)
    {
        if ($i % 3 ==0 && $i % 5 ==0)
        {
            $persegi= $i;
            echo 'Luas Persegi =', '',$persegi;
            echo '<br';
        }
        else {
            if ($i % 3 ==0)
        {
            $luas=(3.14*($i^2%3));
            echo 'Luas lingkaran =','', $luas;
            echo '<br>';
        }

         else if ($i % 5 ==0)
         {
            $keliling= (2*3.14*$i%5);
        echo 'Keliling Lingkaran =','', $keliling;
        echo '<br>';
        }


        else{
            echo $i;
            echo '<br>';
        }
    }
    }}


}
