<div class="companies index">
	<h2><?php echo __('Companies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('company_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('domain'); ?></th>
			<th><?php echo $this->Paginator->sort('website'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('googleplacesid'); ?></th>
			<th><?php echo $this->Paginator->sort('google_places_data'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companies as $company): ?>
	<tr>
		<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($company['CompanyUser']['display_name'], array('controller' => 'company_users', 'action' => 'view', $company['CompanyUser']['id'])); ?>
		</td>
		<td><?php echo h($company['Company']['name']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['domain']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['website']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['googleplacesid']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['google_places_data']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['created']); ?>&nbsp;</td>
		<td><?php echo h($company['Company']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), null, __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Company'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Company Users'), array('controller' => 'company_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company User'), array('controller' => 'company_users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Submissions'), array('controller' => 'submissions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Submission'), array('controller' => 'submissions', 'action' => 'add')); ?> </li>
	</ul>
</div>
