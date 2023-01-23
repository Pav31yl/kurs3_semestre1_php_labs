<html>
<?php
            $link = mysqli_connect('localhost', 'root', '', 'mini_shop') or die(mysqli_error($link));
            $products = mysqli_query($link, "select * from products");
            for ($i=0; $i < mysqli_num_rows($products); $i++) { 
                $rowProduct = mysqli_fetch_assoc($products);
                //  echo '<div>'; 
                echo '<h3>' . $rowProduct['name'] . '</h3>';
                $categoryarr = mysqli_query($link, "select cat_name from products where prod_id = ". $rowProduct['prod_id'] );

        $rowProduct1 = mysqli_fetch_assoc($categoryarr);
        echo ($rowProduct1['cat_name']);
                echo '<br>';
                echo '<div>' . $rowProduct['price'] . ' BYN</div>';
                echo '<br>';
                echo '</div>'; 
            }


        ?>
                    <form action="index.php" method="POST">
        <input  type=submit value="Вернуться обратно">
    </form>
    </html>