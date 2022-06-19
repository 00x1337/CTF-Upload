<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    if ($_COOKIE['id'] == "0"){
        echo "what the path admin ? \n index.php?user=admin(id)";

    }elseif($name == "0"){
        echo "are u developer!!!";

    
    }else{
        echo "nup ! , Ur just User , LOL go fu*k OFF";
    }
}else{
    ?>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIQxxBE9bIZUYU0Dqj5Kcuxw6TzA9cD4ugmQ&usqp=CAU" alt="" srcset="">
<br>
what u want ! , Go fu*k Back right now...
    <?php
}

?>