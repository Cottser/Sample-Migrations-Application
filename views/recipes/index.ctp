<div class="recipes index">
<h2><?php __('Recipes');?></h2>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('user_id');?></th>
	<th><?php echo $this->Paginator->sort('name');?></th>
	<th><?php echo $this->Paginator->sort('content');?></th>
	<th><?php echo $this->Paginator->sort('created');?></th>
	<th><?php echo $this->Paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($recipes as $recipe):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $recipe['Recipe']['id']; ?>
		</td>
		<td>
			<?php echo $this->Html->link($recipe['User']['name'], array('controller' => 'users', 'action' => 'view', $recipe['User']['id'])); ?>
		</td>
		<td>
			<?php echo $recipe['Recipe']['name']; ?>
		</td>
		<td>
			<?php echo $recipe['Recipe']['content']; ?>
		</td>
		<td>
			<?php echo $recipe['Recipe']['created']; ?>
		</td>
		<td>
			<?php echo $recipe['Recipe']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $recipe['Recipe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $recipe['Recipe']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $recipe['Recipe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recipe['Recipe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recipe', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ingredients', true)), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ingredient', true)), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>