<?php

class model
{
    public $conn = '';
    function __construct()
    {
       $this->conn = new mysqli('localhost','root','','villa_project_db');
    }

    // "insert into users(user_name,user_email,user_password,user_gender,user_language,user_file) 
    // values('sohil','shlkoitiya@gmail.com','123','male','gujarati,hindi','najcnan.jpg')"

    function insert($tbl,$data)
    {
        $col_arr = array_keys($data);
        $col = implode(",",$col_arr);
        $val_arr = array_values($data);
        $val = implode("','",$val_arr);

        // "insert into $table($col) values()"

        $sql = "insert into $tbl ($col) values ('$val')";

        $run = $this->conn->query($sql);

        return $run;
    }

    // insert('users',$data);

    // select * from users where uemail = "sdf" and upass = "sncnkn";
    function select_where($tbl,$where)
    {
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

        $select = "select * from $tbl where 1=1";

        $i=0;

        while($i<sizeof($where))
        {
            $select.= " and $col_arr[$i] = '$val_arr[$i]' ";
            $i++;
        }

        $run = $this->conn->query($select);

        return $run;       
    }

    // select * from tablename 
    function select($tbl)
    {
        $select = "select * from $tbl";

        $run = $this->conn->query($select);

        while($fetch = $run->fetch_object())
        {
            $arr[] = $fetch;
        }

        return $arr;
    }

    // update table set col=val,col=val,col=val where col=value and col=value
    function update($tbl, $data, $where)
    {
        $col_arr = array_keys($data);
        $val_arr = array_values($data);

        $update = "update $tbl set ";// update cart set 
        $j = 0;
        $count = count($data);//2
        foreach ($data as $d) {
           if($count == $j+1) //1 == 0+1
           {
            $update .="$col_arr[$j] = '$val_arr[$j]' "; //
           }
           else
           {
            $update .= "$col_arr[$j] = '$val_arr[$j]', "; //
            $j++;//1
           }
        
        }
        $update.= "where 1=1";//where userid =6 and prd_id=2
        $wcol_arr = array_keys($where);
        $wval_arr = array_values($where);

        $i=0;
        foreach ($where as $d) {           
             $update .= " and  $wcol_arr[$i] = '$wval_arr[$i]'";    
             $i++;  
            
         }

        //  echo $update;exit();
         $run = $this->conn->query($update);
         return $run;

    }

    function select_join($tbl1,$tbl2,$on,$where)
    {
        $select = "select * from $tbl1 join $tbl2 on $on where 1=1";
        $col_arr = array_keys($where);
        $val_arr = array_values($where);

        $i=0;
        foreach($where as $w)
        {
            $select.=" and $col_arr[$i] = '$val_arr[$i]'";
            $i++;
        }
        // echo $select;exit;
        $run = $this->conn->query($select);

        while($fetch = $run->fetch_object())
        {
            $arr[] = $fetch;
        }

        if(!empty($arr))
        {
            return $arr;
        }
    }

}

?>