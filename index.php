<html>
    <head>
        <title>Hello World!</title>
    </head>
        <body>
        <?php echo "<p>Hello World</p>";
        //Параметры для подключения
        $db_host = "site.local";
        $db_password ="123";
        $db_user = "root";
        
        
        //Подключение к базе данных 
        $db = mysqli_connect ("localhost","root","") OR DIE("Не могу создать соединение ");
        
        //Выборка базы
        mysqli_select_db ( $db, "database2" ) or die ("no database");

        //Установление кодировки
        mysqli_query( $db, "SET NAMES 'utf8'" );
        
        $result = mysqli_query( $db, "SELECT * FROM `test2`" );
        printf("Select returned %d rows.\n", mysqli_num_rows($result));

        while($myrow = mysqli_fetch_array($result))
            echo "Артикль - ".$myrow['Article']."<br>";
            echo "Наименование товара - ".$myrow['producte name']."<br>";
            echo "Цена - ".$myrow['price']."<br>";
          ;
        ?>
        </body>
</html>
