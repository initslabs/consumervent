<div class="companyUsers form">
<?php echo $this->Form->create('CompanyUser'); ?>
	<fieldset>
		<legend><?php echo __('Edit Company User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('display_name');
		echo $this->Form->input('email_address');
		echo $this->Form->input('passwd');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompanyUser.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompanyUser.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Company Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
