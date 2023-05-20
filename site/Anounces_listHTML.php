<?php
    include('elements/header.php');
?>
    <main>

    <?php
        include("elements/connect.php");

        $query = "select * from anounces";

        $result = mysqli_query($connection,$query);
        $n = mysqli_num_rows($result);

        echo "<h1 class='anounce_list_h1'>List of anounces</h1>";
        echo "<h2 class='anounce_list_h2'>The Number of anounces is : {$n}</h5>";

        for ($i=0;$i<$n;$i++){
            
            echo "<hr>";
            $ligne = mysqli_fetch_assoc($result);
            echo "<div class='anounce_container'>";
            echo "<div class='user_place'>";
            echo "<img style='height:70px;' src='photos/userlogo.png'></img>";
            $query_user = "select username from users where id_user='".$ligne['id_user']."'";
            $result_user = mysqli_query($connection,$query_user);
            $ligne_user = mysqli_fetch_assoc($result_user);

            echo "<h1>".$ligne_user['username']."</h1>";

            echo "</div>";
            

           
            echo "<h3 class='anounce_list_h3'>Context :</h3>";
            echo "<h4 class='anounce_list_h4'>".$ligne['context']."</h4>";
            echo "<h5 class='anounce_list_h5'>".$ligne['text']."</h4>";

            
            echo "</div>";
            
            

            }

            
    
    
    ?>
    
    </main>




</body>
</html>
