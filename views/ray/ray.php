<?php

/* @var $this yii\web\View */
/* @var $someData  \app\models\User[] */



use yii\helpers\Html;
use app\models\Rey;

$this->title = 'Rey';
$this->params['breadcrumbs'][] = $this->title;
\yii\helpers\VarDumper::dump($someData, 10, true);
$i = 1;
$a = 1;
?>
<p class="zagl"> Рейтинг уcпеваемости студентов Радиотехнического колледжа </p>
<p> Таблица со средним баллом </p>

<div class="one">
    <table class="tb">

        <tr>
            <th class="№"> Порядковый номер</th>
            <th class="fio"> ФИО студента</th>
            <th> Группа</th>
            <th> Ср. балл</th>
        </tr>
        <? foreach ($someData as $item) : ?>

                <tr>
                    <td><?= $i ;?></td><td><?= $item->name ?></td><td><?= $item->group ?></td><td><?= $item->ball ?></td>
                </tr>
                <? $i++ ?>

        <?php endforeach; ?>
    </table>

</div>

<p> Таблица с партфолио </p>

<div class="two">
    <table class="tb2">
        <tr>
            <th class="№"> Порядковый номер</th>
            <th class="fio"> ФИО студента</th>
            <th> Группа</th>
            <th> Балл парт.</th>
        </tr>
        <? foreach ($somePar as $par) : ?>

            <tr>
                <td><?= $a ;?></td><td><?= $par->name ?></td><td><?= $par->group ?></td><td><?= $par->part_ball ?></td>
            </tr>
            <? $a++ ?>

        <?php endforeach; ?>

    </table>
</div>
