if(!$link) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
    else
        {
            echo "Hemos conectado al servidor <br>" ;
        }

    if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
    else
        {
        echo "Tabla seleccionada" ;
        };