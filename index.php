<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>115-kurtsev-oop6</title>
    </head>
    <body>
        <?php
            //
        ?>
        <div>
            <h3>Задача "Кости"</h3>
            Написать программу, моделирующую бросание двух костей.
            <br>Кости - это шестигранные кубики, каждая грань которых имеет значение очков от 1 до 6 включительно.
            <br>По теории вероятностей, количество очков, равное 7, должно выпадать чаще других.
            <br>Примерно в 1/6 всех случаев. Задача проверить это утверждение.
            <br>
            <br>Программа должна моделировать бросание двух костей с помощью генератора случайных чисел.
            <br>Кости "бросаются" по одной, значения суммируются.
            <br>Ваша программа должна бросать две кости ровно 36000 раз.
            <br>В конце работы программы выведите результаты в виде:
            <br><количество очков> - <сколько раз выпало всего> - <сколько раз выпало в дробном соотношении>.
            <br>
            <br>Необходимо реализовать сохранение статистических результатов в БД.
            <br>Для взаимодействия PHP и MySQL рекомендуется использовать PDO.
            <br>Необходимо реализовать интерфейс для просмотра статистических результатов.

            <br><form method="post" action="action.php"><input type="submit" value="Solve !"></form>
        </div>
    </body>
</html>
