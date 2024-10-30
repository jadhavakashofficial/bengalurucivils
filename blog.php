 <?php
error_reporting(E_ALL);
ini_set('display_errors',1);
$connection = mysqli_connect("localhost", "root", "","asgard");
$new_array = array();
if(isset($_GET['title'])){
    if($connection){
        $res = "SELECT name,desc  FROM current__mains WHERE desc='".$_GET['title']."'";
        $result=mysqli_query($connection,$res);
        $i = 0;
        if(mysqli_num_row($result)>0){
           while($row = mysqli_fetch_assoc($result)){
                $new_array[$i]['name'] = $row['name'];
                $new_array[$i]['desc'] = $row['desc'];
                $i++;
           }

        }else{
         echo "no record exist";
        }

    }else{
        echo mysqli_error();
    }
}else{
    echo "title is not selected";
}
?>
<table>                 
<tbody>
<?php if(count($new_array) >=1){?>
<?php foreach($new_array as $new_arr){?>
    <tr>    
    <td><td><a href="current_affairs.php?title=<?php echo $new_arr['name'];?>"><?php echo $new_arr['name']; ?></a></td>
    <td><a href="current_affairs.php?title=<?php echo $new_arr['desc'];?>"><?php echo $new_arr['desc']; ?></a></td>                  
    </tr>
<?php }?>
</tbody>
</table>
<?php}?>