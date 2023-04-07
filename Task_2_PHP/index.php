<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Задача 2</title>
</head>
<body>

<?php

  function getChange($price, $deposit) 
  {
    // Сдача = внесённая сумма - цена товара
    $change = $deposit - $price;

    // Номиналы денег для сдачи
    $denomination = [1, 2, 5, 10, 100, 200, 500, 1000, 2000, 5000];

    // Количество конкретных номиналов для сдачи
    $countNomination = 0;

    // В цикле проход по номиналам (с большего), пока сдача не равна 0
    for ($i = count($denomination); $change > 0; $i--) { 
      // Проверка, если сдача больше номинала и номинал не равен 0 (для деления)
      if($change >= $denomination[$i] && $denomination[$i] != 0)
      {
        // Получение количества номиналов
        $countNomination = $change / $denomination[$i];
        // Сдачу уменьшаем до остатка от деления сдачи на номинал
        $change = $change % $denomination[$i];
        // Вывод на экран
        printf($denomination[$i] . ' руб: ' . (int)$countNomination . ' шт.' );
        // Разделение запятыми между номиналами
        if ($change > 0) printf(', ');
      }
    }

  }

  // При проверке, получается: 10 руб: 2 шт., 5 руб: 1 шт., 2 руб: 2 шт.
  getChange(21, 50);

?>
  
</body>
</html>