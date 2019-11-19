
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Rey;

$this->title = 'Rey';
$this->params['breadcrumbs'][] = $this->title;
?>
<table class="tb">
    <tr>
        <th class="№"> Порядковый номер </th>
        <th class="fio"> ФИО студента </th>
        <th> Группа </th>
        <th> Ср. балл </th>
    </tr>
<tr>
    <td width="20px"><?php echo $index+1; ?></td>
    <!--<td><?//php echo CHtml::encode($data->id); ?></td>-->
    <td><?php echo CHtml::encode($data->name); ?></td>
    <td><?php echo CHtml::encode($data->surname); ?></td>
    <td><?php echo CHtml::encode($data->city_id); ?></td>
</tr>
