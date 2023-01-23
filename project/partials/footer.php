<?php
if(!empty($_SESSION['FIO'])){
    $FIO = $_SESSION['FIO'];
}
?>
<footer style="position: absolute;

    width: 100%;
    left: 0px;
    top: 925px;
">
    <div class="footer__container">
        <p class="footer__title">Итоговый проект по PHP</p>
        <div> 
    <?php
    print($FIO);
    ?>
    
    </div>
    </div>
</footer>
