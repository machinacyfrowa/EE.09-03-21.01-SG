<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twoje BMI</title>
    <link rel="stylesheet" href="style3.css">
</head>

<body>
    <div id="naglowek">
        <div id="logo">
        <img src="wzor.png" alt="wzór BMI">
        </div>
        <div id="baner">
        <h1>Oblicz swoje BMI</h1>
        </div>
    </div>
    <div id="glowny">
        <table>
            <tr>
                <th>Interpretacja BMI</th>
                <th>Wartość minimalna</th>
                <th>Wartość maksymalna</th>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
    <div id="podzial">
        <div id="lewy">
            <h2>Podaj wagę i wzrost</h2>
            <form action="bmi.php" method="post">
                Waga:<input type="number" min="1" name="waga">
                Wzrost w cm:<input type="number" min="1">
                <button type="submit">Oblicz i zapamietaj wynik</button>
            </form>
        </div>
        <div id="prawy"><img src="rys1.png" alt="ćwiczenia"></div>
    </div>
    <div id="stopka">
        Autor: 00000000000 <a href="kwerendy.txt">Zobacz kwerendy</a></div>
</body>

</html>