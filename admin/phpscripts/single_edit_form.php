<?php

    function single_edit($tbl, $col, $id) 
    {
        $result = getSingle($tbl, $col, $id);
        $getResult = mysqli_fetch_array($result);
        
        echo "<form action=\"phpscripts/edit.php\" method=\"post\">";
        
            echo "<input class=\"hide\" type=\"text\" name=\"tbl\" value=\"{$tbl}\"/>";
            echo "<input class=\"hide\" type=\"text\" name=\"col\" value=\"{$col}\"/>";
            echo "<input class=\"hide\" type=\"text\" name=\"id\" value=\"{$id}\"/>";
            
            for($i=0; $i<mysqli_num_fields($result); $i++)
            {
                
                $dataType = mysqli_fetch_field_direct($result, $i);
                $fieldName = $dataType->name;
                $fieldType = $dataType->type;
                //echo $fieldType."</br>"; /*2=intType, 253=varchar, 252=text*/
                
                if($fieldName != $col)
                {
                    echo "<label>{$fieldName}</label>";
                    if($fieldType != 252)
                    {
                        echo "<input type=\"text\" name=\"{$fieldName}\" value=\"{$getResult[$i]}\"/>";
                    }
                    else
                    {
                        echo "<textarea name=\"$fieldName\">{$getResult[$i]}</textarea>";
                    }
                }
            }
            //echo mysqli_num_fields($result);
            
            echo "<input type=\"submit\" value=\"Edit Content\"/>";
        echo"</form>";
    }

?>