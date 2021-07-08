<!DOCTYPE html>
<html lang='ru'> <!--Язык страницы-->
<head>
    <meta charset='utf-8'> <!--Кодировка страницы-->
    <meta name="description" content="Альпака календарь"> <!--Описание страницы-->
    <link rel="icon" href="/favicon.ico"> <!--Подключение иконки-->
    <link rel="stylesheet" type="text/css" href="/style.css"> <!--Подключение файла стилей-->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css"> <!--Подключение иконочных шрифтов-->
    <title>Альпака календарь</title> <!--Название страницы-->
</head>
<body>
<div class="calend1"> <!--правый календарь-->
    <div class="header"> <!--Шапка календаря-->
        <i class="fa fa-angle-left" id="arrow" aria-hidden="true"></i> <!--стрелка влево-->
        <div class="month"> ЯНВАРЬ</div> <!--блок название месяца-->
        <i class="fa fa-angle-right" id="arrow" aria-hidden="true"></i> <!--стрелка вправо-->
    </div>
    <table> <!--таблица-->
        <tr>
            <td class="d1" id="day"><input type="checkbox" id="day1"><label for="day1" class="click">&nbsp1&nbsp</label>
            </td> <!--ячейа таблицы, привязка label к checkbox-->
            <td class="d2" id="day"><input type="checkbox" id="day2"><label for="day2" class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day3"><label for="day3" class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day4"><label for="day4" class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day5"><label for="day5" class="click">&nbsp5&nbsp</label>
            </td>
            <td class="d6" id="day"><input type="checkbox" id="day6"><label for="day6" class="click">&nbsp6&nbsp</label>
            </td>
            <td class="d7" id="day"><input type="checkbox" id="day7"><label for="day7" class="click">&nbsp7&nbsp</label>
            </td>
        </tr>
        <tr>
            <td class="d8" id="day"><input type="checkbox" id="day8"><label for="day8" class="click">&nbsp8&nbsp</label>
            </td>
            <td class="d9" id="day"><input type="checkbox" id="day9"><label for="day9" class="click">&nbsp9&nbsp</label>
            </td>
            <td class="d10" id="day"><input type="checkbox" id="day10"><label for="day10" class="click">10</label></td>
            <td class="d11" id="day"><input type="checkbox" id="day11"><label for="day11" class="click">11</label></td>
            <td class="d12" id="day"><input type="checkbox" id="day12"><label for="day12" class="click">12</label></td>
            <td class="d13" id="day"><input type="checkbox" id="day13"><label for="day13" class="click">13</label></td>
            <td class="d14" id="day"><input type="checkbox" id="day14"><label for="day14" class="click">14</label></td>
        </tr>
        <tr>
            <td class="d15" id="day"><input type="checkbox" id="day15"><label for="day15" class="click">15</label></td>
            <td class="d16" id="day"><input type="checkbox" id="day16"><label for="day16" class="click">16</label></td>
            <td class="d17" id="day"><input type="checkbox" id="day17"><label for="day17" class="click">17</label></td>
            <td class="d18" id="day"><input type="checkbox" id="day18"><label for="day18" class="click">18</label></td>
            <td class="d19" id="day"><input type="checkbox" id="day19"><label for="day19" class="click">19</label></td>
            <td class="d20" id="day"><input type="checkbox" id="day20"><label for="day20" class="click">20</label></td>
            <td class="d21" id="day"><input type="checkbox" id="day21"><label for="day21" class="click">21</label></td>
        </tr>
        <tr>
            <td class="d22" id="day"><input type="checkbox" id="day22"><label for="day22" class="click">22</label></td>
            <td class="d23" id="day"><input type="checkbox" id="day23"><label for="day23" class="click">23</label></td>
            <td class="d24" id="day"><input type="checkbox" id="day24"><label for="day24" class="click">24</label></td>
            <td class="d25" id="day"><input type="checkbox" id="day25"><label for="day25" class="click">25</label></td>
            <td class="d26" id="day"><input type="checkbox" id="day26"><label for="day26" class="click">26</label></td>
            <td class="d27" id="day"><input type="checkbox" id="day27"><label for="day27" class="click">27</label></td>
            <td class="d28" id="day"><input type="checkbox" id="day28"><label for="day28" class="click">28</label></td>
        </tr>
        <tr>
            <td class="d29" id="day"><input type="checkbox" id="day29"><label for="day29" class="click">29</label></td>
            <td class="d30" id="day"><input type="checkbox" id="day30"><label for="day30" class="click">30</label></td>
            <td class="d1" id="day"><input type="checkbox" id="day31"><label for="day31"
                                                                             class="click">&nbsp1&nbsp</label>
            </td>
            <td class="d2" id="day"><input type="checkbox" id="day32"><label for="day32"
                                                                             class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day33"><label for="day33"
                                                                             class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day34"><label for="day34"
                                                                             class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day35"><label for="day35"
                                                                             class="click">&nbsp5&nbsp</label>
            </td>
        </tr>
    </table>
    <div class="bg_black"> <!--черный фон-->
    </div>
    <img src="alpaca.jpg" class="bg_img" alt="Альпака календарь"> <!--изображение альпака фон-->
</div>

<div class="calend2"> <!--среднйи календарь-->
    <div class="header"> <!--Шапка календаря-->
        <i class="fa fa-angle-left" id="arrow" aria-hidden="true"></i> <!--стрелка влево-->
        <div class="month"> ЯНВАРЬ</div> <!--блок название месяца-->
        <i class="fa fa-angle-right" id="arrow" aria-hidden="true"></i> <!--стрелка вправо-->
    </div>
    <table> <!--таблица-->
        <tr>
            <td class="d1" id="day"><input type="checkbox" id="day1"><label for="day1" class="click">&nbsp1&nbsp</label>
            </td> <!--ячейа таблицы, привязка label к checkbox-->
            <td class="dd2" id="day"><input type="checkbox" id="dayday2"><label for="dayday2"
                                                                                class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day3"><label for="day3" class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day4"><label for="day4" class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day5"><label for="day5" class="click">&nbsp5&nbsp</label>
            </td>
            <td class="d6" id="day"><input type="checkbox" id="day6"><label for="day6" class="click">&nbsp6&nbsp</label>
            </td>
            <td class="d7" id="day"><input type="checkbox" id="day7"><label for="day7" class="click">&nbsp7&nbsp</label>
            </td>
        </tr>
        <tr>
            <td class="d8" id="day"><input type="checkbox" id="day8"><label for="day8" class="click">&nbsp8&nbsp</label>
            </td>
            <td class="d9" id="day"><input type="checkbox" id="day9"><label for="day9" class="click">&nbsp9&nbsp</label>
            </td>
            <td class="d10" id="day"><input type="checkbox" id="day10"><label for="day10" class="click">10</label></td>
            <td class="d11" id="day"><input type="checkbox" id="day11"><label for="day11" class="click">11</label></td>
            <td class="d12" id="day"><input type="checkbox" id="day12"><label for="day12" class="click">12</label></td>
            <td class="d13" id="day"><input type="checkbox" id="day13"><label for="day13" class="click">13</label></td>
            <td class="d14" id="day"><input type="checkbox" id="day14"><label for="day14" class="click">14</label></td>
        </tr>
        <tr>
            <td class="d15" id="day"><input type="checkbox" id="day15"><label for="day15" class="click">15</label></td>
            <td class="d16" id="day"><input type="checkbox" id="day16"><label for="day16" class="click">16</label></td>
            <td class="d17" id="day"><input type="checkbox" id="day17"><label for="day17" class="click">17</label></td>
            <td class="d18" id="day"><input type="checkbox" id="day18"><label for="day18" class="click">18</label></td>
            <td class="d19" id="day"><input type="checkbox" id="day19"><label for="day19" class="click">19</label></td>
            <td class="d20" id="day"><input type="checkbox" id="day20"><label for="day20" class="click">20</label></td>
            <td class="d21" id="day"><input type="checkbox" id="day21"><label for="day21" class="click">21</label></td>
        </tr>
        <tr>
            <td class="d22" id="day"><input type="checkbox" id="day22"><label for="day22" class="click">22</label></td>
            <td class="d23" id="day"><input type="checkbox" id="day23"><label for="day23" class="click">23</label></td>
            <td class="d24" id="day"><input type="checkbox" id="day24"><label for="day24" class="click">24</label></td>
            <td class="d25" id="day"><input type="checkbox" id="day25"><label for="day25" class="click">25</label></td>
            <td class="d26" id="day"><input type="checkbox" id="day26"><label for="day26" class="click">26</label></td>
            <td class="d27" id="day"><input type="checkbox" id="day27"><label for="day27" class="click">27</label></td>
            <td class="d28" id="day"><input type="checkbox" id="day28"><label for="day28" class="click">28</label></td>
        </tr>
        <tr>
            <td class="d29" id="day"><input type="checkbox" id="day29"><label for="day29" class="click">29</label></td>
            <td class="d30" id="day"><input type="checkbox" id="day30"><label for="day30" class="click">30</label></td>
            <td class="d1" id="day"><input type="checkbox" id="day31"><label for="day31"
                                                                             class="click">&nbsp1&nbsp</label>
            </td>
            <td class="d2" id="day"><input type="checkbox" id="day32"><label for="day32"
                                                                             class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day33"><label for="day33"
                                                                             class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day34"><label for="day34"
                                                                             class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day35"><label for="day35"
                                                                             class="click">&nbsp5&nbsp</label>
            </td>
        </tr>
    </table>
    <div class="bg_black"> <!--черный фон-->
    </div>
    <img src="alpaca.jpg" class="bg_img" alt="Альпака календарь"> <!--изображение альпака фон-->
</div>

<div class="calend3"> <!--левый календарь-->
    <div class="header"> <!--Шапка календаря-->
        <i class="fa fa-angle-left" id="arrow" aria-hidden="true"></i> <!--стрелка влево-->
        <div class="month"> ЯНВАРЬ</div> <!--блок название месяца-->
        <i class="fa fa-angle-right" id="arrow" aria-hidden="true"></i> <!--стрелка вправо-->
    </div>
    <table> <!--таблица-->
        <tr>
            <td class="d1" id="day"><input type="checkbox" id="day1"><label for="day1" class="click">&nbsp1&nbsp</label>
            </td> <!--ячейа таблицы, привязка label к checkbox-->
            <td class="d2" id="day"><input type="checkbox" id="day2"><label for="day2" class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day3"><label for="day3" class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day4"><label for="day4" class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day5"><label for="day5" class="click">&nbsp5&nbsp</label>
            </td>
            <td class="d6" id="day"><input type="checkbox" id="day6"><label for="day6" class="click">&nbsp6&nbsp</label>
            </td>
            <td class="d7" id="day"><input type="checkbox" id="day7"><label for="day7" class="click">&nbsp7&nbsp</label>
            </td>
        </tr>
        <tr>
            <td class="d8" id="day"><input type="checkbox" id="day8"><label for="day8" class="click">&nbsp8&nbsp</label>
            </td>
            <td class="d9" id="day"><input type="checkbox" id="day9"><label for="day9" class="click">&nbsp9&nbsp</label>
            </td>
            <td class="d10" id="day"><input type="checkbox" id="day10"><label for="day10" class="click">10</label></td>
            <td class="d11" id="day"><input type="checkbox" id="day11"><label for="day11" class="click">11</label></td>
            <td class="d12" id="day"><input type="checkbox" id="day12"><label for="day12" class="click">12</label></td>
            <td class="d13" id="day"><input type="checkbox" id="day13"><label for="day13" class="click">13</label></td>
            <td class="d14" id="day"><input type="checkbox" id="day14"><label for="day14" class="click">14</label></td>
        </tr>
        <tr>
            <td class="d15" id="day"><input type="checkbox" id="day15"><label for="day15" class="click">15</label></td>
            <td class="d16" id="day"><input type="checkbox" id="day16"><label for="day16" class="click">16</label></td>
            <td class="d17" id="day"><input type="checkbox" id="day17"><label for="day17" class="click">17</label></td>
            <td class="d18" id="day"><input type="checkbox" id="day18"><label for="day18" class="click">18</label></td>
            <td class="d19" id="day"><input type="checkbox" id="day19"><label for="day19" class="click">19</label></td>
            <td class="d20" id="day"><input type="checkbox" id="day20"><label for="day20" class="click">20</label></td>
            <td class="d21" id="day"><input type="checkbox" id="day21"><label for="day21" class="click">21</label></td>
        </tr>
        <tr>
            <td class="d22" id="day"><input type="checkbox" id="day22"><label for="day22" class="click">22</label></td>
            <td class="d23" id="day"><input type="checkbox" id="day23"><label for="day23" class="click">23</label></td>
            <td class="d24" id="day"><input type="checkbox" id="day24"><label for="day24" class="click">24</label></td>
            <td class="d25" id="day"><input type="checkbox" id="day25"><label for="day25" class="click">25</label></td>
            <td class="d26" id="day"><input type="checkbox" id="day26"><label for="day26" class="click">26</label></td>
            <td class="d27" id="day"><input type="checkbox" id="day27"><label for="day27" class="click">27</label></td>
            <td class="d28" id="day"><input type="checkbox" id="day28"><label for="day28" class="click">28</label></td>
        </tr>
        <tr>
            <td class="d29" id="day"><input type="checkbox" id="day29"><label for="day29" class="click">29</label></td>
            <td class="d30" id="day"><input type="checkbox" id="day30"><label for="day30" class="click">30</label></td>
            <td class="d1" id="day"><input type="checkbox" id="day31"><label for="day31"
                                                                             class="click">&nbsp1&nbsp</label>
            </td>
            <td class="d2" id="day"><input type="checkbox" id="day32"><label for="day32"
                                                                             class="click">&nbsp2&nbsp</label>
            </td>
            <td class="d3" id="day"><input type="checkbox" id="day33"><label for="day33"
                                                                             class="click">&nbsp3&nbsp</label>
            </td>
            <td class="d4" id="day"><input type="checkbox" id="day34"><label for="day34"
                                                                             class="click">&nbsp4&nbsp</label>
            </td>
            <td class="d5" id="day"><input type="checkbox" id="day35"><label for="day35"
                                                                             class="click">&nbsp5&nbsp</label>
            </td>
        </tr>
    </table>
    <div class="bg_black"> <!--черный фон-->
    </div>
    <img src="alpaca.jpg" class="bg_img" alt="Альпака календарь"> <!--изображение альпака фон-->
</div>
</body>
</html>