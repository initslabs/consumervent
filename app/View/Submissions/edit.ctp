<div class="submissions form">
<?php echo $this->Form->create('Submission'); ?>
	<fieldset>
		<legend><?php echo __('Edit Submission'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('submission_status_id');
		echo $this->Form->input('company_id');
		echo $this->Form->input('experience_type_id');
		echo $this->Form->input('submission_type_id');
		echo $this->Form->input('user_display_name');
		echo $this->Form->input('user_email_address');
		echo $this->Form->input('user_phone_number');
		echo $this->Form->input('recommendation_level');
		echo $this->Form->input('user_company_website');
		echo $this->Form->input('detected_website');
		echo $this->Form->input('incident_date');
		echo $this->Form->input('incident_address');
		echo $this->Form->input('user_company_contacted');
		echo $this->Form->input('user_amount_involved');
		echo $this->Form->input('user_company_twitter_handle');
		echo $this->Form->input('user_company_email');
		echo $this->Form->input('user_company_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Submission.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Submission.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Statuses'), array('controller' => 'submission_statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Status'), array('controller' => 'submission_statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experience Types'), array('controller' => 'experience_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience Type'), array('controller' => 'experience_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submission Types'), array('controller' => 'submission_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission Type'), array('controller' => 'submission_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
