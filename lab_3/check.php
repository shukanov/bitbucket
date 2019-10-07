<?php
header('Content-Type: text/html; charset=utf-8');
$add = $_POST['add'];
$words = array("проект", "стороны", "роль");
array_push($words, $add);
$text = "С другой стороны курс на социально-ориентированный национальный проект играет важную роль в формировании позиций, занимаемых участниками в отношении поставленных задач! Практический опыт показывает, что реализация намеченного плана развития позволяет выполнить важнейшие задания по разработке существующих финансовых и административных условий. С другой стороны начало повседневной работы по формированию позиции напрямую зависит от системы обучения кадров, соответствующей насущным потребностям.";
function check_func($text, $words)
{
    $text_arr = explode(" ", $text);
    for($i = 0; $i < count($text_arr); $i++)
    {
        for($j = 0; $j < count($words); $j++)
        {
            if($text_arr[$i] == $words[$j])
            {
                // $symbol_arr = str_split($text_arr[$i]);
                $symbol_arr = preg_split('//u', $text_arr[$i], -1, PREG_SPLIT_NO_EMPTY);
                // print_r($symbol_arr);
                $new_word = str_repeat("*", count($symbol_arr));
                $text_arr[$i] = $new_word;
            }
        }
    }
    $new_text = implode(" ", $text_arr);
    echo $new_text;
}

