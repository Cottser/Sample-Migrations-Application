<div class="recipes form">
<?php echo $this->Form->create('Recipe');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Recipe', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('content');
		echo $this->Form->input('Ingredient');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Recipe.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Recipe.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recipes', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ingredients', true)), array('controller' => 'ingredients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ingredient', true)), array('controller' => 'ingredients', 'action' => 'add')); ?> </li>
	</ul>
</div>