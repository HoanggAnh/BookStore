<?php
                        require "inc/myconnect.php";
                        //tao mang de lu tru madv
                        $ma[]= $_GET["madv"];
                        $madv= implode(",",$ma);
                        $sql="SELECT * from dichvu where madv  in ($madv)";
                        $result = $conn->query($sql);
                        $total =0; 
                        foreach($result as $s)
                        {
                         // output data of each row
                            $total += $s["gia"];                         
                        }
                        echo $total;
 ?>