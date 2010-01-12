<div class="ingredients form">
<?php echo $this->Form->create('Ingredient');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Ingredient', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Recipe');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Ingredient.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Ingredient.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ingredients', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recipes', true)), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recipe', true)), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>