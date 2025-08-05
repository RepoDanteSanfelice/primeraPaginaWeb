<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>h1{color: chocolate;text-align: center;}</style>
</head>
<body>
    <h1>Hola mundo</h1>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas - PHP</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .contador-container { border: 2px solid #333; padding: 20px; display: inline-block; }
    </style>
</head>
<body>

    <h1>Bienvenido a mi sitio web</h1>

    <?php
        // Nombre del archivo donde se guarda el contador
        $archivo = 'contador.txt';

        // Abrir el archivo en modo lectura
        $fp = fopen($archivo, 'r');
        if ($fp) {
            // Leer el valor actual del contador
            $contador = (int) fread($fp, filesize($archivo));
            fclose($fp);

            // Incrementar el contador
            $contador++;

            // Abrir el archivo en modo escritura (borra el contenido anterior)
            $fp = fopen($archivo, 'w');
            if ($fp) {
                // Escribir el nuevo valor
                fwrite($fp, $contador);
                fclose($fp);
            }
        } else {
            // Si el archivo no existe, crearlo con valor 1
            $contador = 1;
            $fp = fopen($archivo, 'w');
            if ($fp) {
                fwrite($fp, $contador);
                fclose($fp);
            }
        }
    ?>

    <div class="contador-container">
        <p>Número de visitas:</p>
        <h2><?php echo $contador; ?></h2>
    </div>

</body>
</html>
</body>
</html>