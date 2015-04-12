<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customer */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


<table class="table table-striped table-bordered detail-view">
	<tbody>
		<tr>
			<th>ID</th>
			<td><?php echo $model->id; ?></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><?php echo $model->name; ?></td>
		</tr>
		<tr>
			<th>Phone</th>
			<td><?php echo $model->phone; ?></td>
		</tr>
		<tr>
			<th>Avatar</th>
			<?php 
				$basePath = Yii::$app->request->BaseUrl.'/'.'uploads';
			?>
			<td><img src="<?= $basePath.'/'.$model->avatar; ?>" width="200" height="200"></td>
		</tr>
		<tr>
			<th> Account Status</th>
			<td><?php echo $status = ($model->status == 1 ? 'Active' : 'Inactive'); ?></td>
		</tr>
		<tr>
			<th>Date</th>
			<td><?php echo $model->date; ?></td>
		</tr>
	</tbody>
</table>

</div>
