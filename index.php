<?php
class Maze
{
    public function way($val)
    {
        $way ='';
        $a =0;
        for($i=1;$i<=$val;$i++)
        {
            if($i%2==1)
            {
                $a++;
            }
            for($j=1;$j<=$val;$j++)
            {
                if($j==1 || $j==($val))
                {
                    $way .='@';
                }
                elseif($i%2==1)
                {
                    if(($j==2 && $a%2==1)||($j==($val-1) && $a%2==0))
                    {
                        $way .=' ';
                    }           
                    else
                    {
                        $way .='@';
                    }
                }  
                else
                {
                    $way .=' ';
                }
            }
            $way .='<br/>';
        }
        return $way;
    }
}

$maze = new Maze();
$size = (!isset($_GET['size']))?15:$_GET['size'];

echo "<form action='index.php' method='get'><input type='number' name='size'> <input type='submit'></form>";

echo "<pre>";
echo $maze->way($size);
echo "</pre>";
echo "current size : ".$size."x".$size;