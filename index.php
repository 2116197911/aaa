<?php
class wash_cards
{
    function __construct()
    {
       $n = 52;
       $poker = array(); 

        // 初始化阵列 
        for($i = 1; $i <= $n; $i++)
        {
            $poker[$i] = $i;
         }
           // $j = mt_rand() % 52 + 1;
           // var_dump($j);die;
        // 洗牌 
        for($i = 1; $i <= $n; $i++) 
        {
           $j = mt_rand() % 52 + 1;
           $tmp = $poker[$i];
           $poker[$i] = $poker[$j]; 
           $poker[$j] = $tmp;
        }
        // var_dump($poker);die;
        for($i = 1; $i <= $n; $i++) 
        {
            // 判断花色 
            switch(intval(($poker[$i]-1) / 13)) 
            { 
                //每13一循环，但13的倍数仍是该循环对应的花色，所以poker[i]要-1
                case 0: 
                    echo "桃"; 
                    break;
                case 1: 
                    echo "心"; 
                    break;
                case 2: 
                    echo "方块"; 
                    break;
                case 3: 
                    echo "梅"; 
                    break;
            } 

            var_dump($poker);die;
            // 扑克牌数字 
            $remain = $poker[$i] % 13;
            switch($remain) 
            { 
                case 0: 
                    $remain = 'K'; 
                    break;
                case 12: 
                    $remain = 'Q'; 
                    break;
                case 11: 
                    $remain = 'J'; 
                    break;
                default:
            } 
            echo $remain;
            if(strlen($remain) == 1)
            {
                echo '   ';    
            }
            else
            {
                echo '  ';        
            }
            
            if($i % 13 == 0)
                echo "\n";
        }
    }
}
echo "<pre>";
new wash_cards();