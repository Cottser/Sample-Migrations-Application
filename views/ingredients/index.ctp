<div class="ingredients index">
<h2><?php __('Ingredients');?></h2>
<p>
<?php
echo $this->Paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $this->Paginator->sort('id');?></th>
	<th><?php echo $this->Paginator->sort('name');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($ingredients as $ingredient):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $ingredient['Ingredient']['id']; ?>
		</td>
		<td>
			<?php echo $ingredient['Ingredient']['name']; ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ingredient['Ingredient']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ingredient['Ingredient']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ingredient['Ingredient']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingredient['Ingredient']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ingredient', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recipes', true)), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recipe', true)), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>