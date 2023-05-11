<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link href="styl2.css" rel="stylesheet">
</head>

<body>
    <div id=banerlewy>
        <img src="logo.png" alt="meteo">
    </div>
    <div id=banerśrodkowy>
        <h1>Prognoza dla Wrocławia</h1>
    </div>
    <div id=banerprawy>
        <p>maj, 2019 r.</p>
    </div>



    <div id=główny>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY[MM/H]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>

            <?php
                $conn = mysqli_connect("localhost","root","","prognoza");

                $sql = "SELECT *
                from pogoda
                WHERE pogoda.miasta_id = 1
                ORDER BY pogoda.data_prognozy ASC";

                $result = mysqli_query($conn,$sql);


                while($row = mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo "<td>". $row['data_prognozy'] . "</td>";
                echo "<td>". $row['temperatura_noc'] . "</td>";
                echo "<td>". $row['temperatura_dzien'] . "</td>";
                echo "<td>". $row['opady'] . "</td>";
                echo "<td>". $row['cisnienie'] . "</td>";
                echo "</tr>";



            }


                mysqli_close($conn);
            ?>

        </table>
    </div>




    <div id=lewy><img src="obraz.jpg" alt="Polska, Wrocław"></div>
    <div id=prawy><a href="kwerendy.txt">Pobierz kwerendy</a></div>





    <div id=stopka>
        <p>Stronę wykonał: Mateusz Śledź</p>
    </div>




</body>

</html>