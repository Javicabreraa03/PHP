    <?php
    $cantidad=$_GET["dinero"];
    //Billetes de quinientos
    $billetes500=indiv($cantidad,500);
    $restode500=$cantidad%500;
    echo "$billetes500 billete/s de 500.";
    ?>
    <p>
    <?php
    //Billetes de 200
    $Billetes200=indiv($restode500,200);
    $restode200=$restode500%200;
    echo "$Billetes200 billete/s de 200.";
    ?>
    </p>
    <p>
    <?php
    //Billetes de 100
    $Billetes100=indiv($restode200,100);
    $restode100=$restode200%100;
    echo "$Billetes100 billete/s de 100.";
    ?>
    </p>
    <p>
    <?php
    //Billetes de 50
    $Billetes50=indiv($restode100,50);
    $restode50=$restode100%50;
    echo "$Billetes50 billete/s de 50.";
    ?>
    </p>
    <p>
    <?php
    //Billetes de 20
    $Billetes20=indiv($restode50,20);
    $restode20=$restode50%20;
    echo "$Billetes20 billete/s de 20.";
    ?>
    </p>
    <p>
    <?php
    //Billetes de 10
    $Billetes10=indiv($restode20,10);
    $restode10=$restode20%10;
    echo "$Billetes10 billete/s de 10.";
    ?>
    </p>
    <?php
    //Billetes de 5
    $Billetes5=indiv($restode10,5);
    $restode5=$restode10%5;
    echo "$Billetes5 billete/s de 5.";
    ?>
    </p>
    <p>
    <?php
    //Monedas de 2
    $Monedas2=indiv($restode5,2);
    $restode2=$restode5%2;
    echo "$Monedas2 moneda/s de 2.";
    ?>
    </p>
    <p>
    <?php
    //Monedas de 1
    $Monedas1=indiv($restode2,1);
    $restode1=$restode2%1;
    echo "$Monedas1 moneda/s de 1.";
    ?>
    </p>

