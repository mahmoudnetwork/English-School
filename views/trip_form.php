<?php

include_once './header2.php';
$msg=" ";
$x="";
$y="";
 $conn=mysqli_connect("localhost","root", "","phplogin");
if ( isset($_POST['_submit']))
{
    if ( empty($_POST['_username']))
        $msg="username is required";
    else if (empty ($_POST['_password']))
        $msg="password is required";
    
    else {
       
        mysqli_query($conn,"insert into reserv_trip values ('$_POST[_ID]','$_POST[_t_id]','$_POST[_name]','$_POST[_address]','$_POST[_phone_num]','$_POST[_id_c]') ");
    
    } 
}
   $query="SELECT * from  reserve_trip ";
   $result = mysqli_query($conn,$query);
 
   ?>

<?php
while ($row = mysqli_fetch_array($result)){
        $y = $row['name'];

    ?>
<h1 style="color: lightgoldenrodyellow"> <?= $y ?></h1>
<?php }?>
<form action="signup.php" method="post" >
    <?= $msg ?>
    <table border="0" style="color:springgreen" >
        <tr>
            <th colspan="3" style="color: firebrick"><h2>Register for a trip</h2></th>
            <td></td>
            <td></td>
        </tr>
          <tr>
              <th style="color: blue" >ID:</th>
            <td><input type="text" name="_ID" /></td>
            <td></td>
        </tr>
          
        <tr>
            <th style="color:greenyellow" >Trip_id:</th>
            <td><input type="text" name="_t_id" /></td>
            <td></td>
        </tr>
            
        <tr>
            <th>Name:</th>
            <td><input type="text" name="_name" /></td>
            <td></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><input type="text" name="_address" /></td>
            <td></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><input type="text" name="_phone_num" /></td>
            <td></td>
        </tr>
        
        <tr>
            <th>Class :</th>
            <td><input type="text" name="_id_c" /></td>
            <td></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" name="_submit"value=" Register " /></td>
            <td></td>
        </tr>
        
    </table>
    
</form>
<?php
include_once './footer.php';
?>