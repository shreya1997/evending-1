<?php
//selects name of product from database and store it in variables

 $con = mysqli_connect('127.0.0.1','root','');
                    if(!$con)
                    {
                      echo "Not Connected";
                    }
                    if(!mysqli_select_db($con,'evending'))
                    {
                      echo "Not Selected";
                    }

                    $sql="SELECT name FROM product WHERE code=13 AND vend=4";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value1=$row['name'];

                    $sql="SELECT name FROM product WHERE code=14 AND vend=4";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value2=$row['name'];

                    $sql="SELECT name FROM product WHERE code=15 AND vend=4";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value3=$row['name'];

                    $sql="SELECT name FROM product WHERE code=16 AND vend=4";
                    $result = $con-> query($sql);
                    $row = $result->fetch_assoc();
                    $value4=$row['name'];

?>
