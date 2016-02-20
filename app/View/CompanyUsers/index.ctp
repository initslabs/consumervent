<div class="companyUsers index">
	<h2><?php echo __('Company Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('display_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('passwd'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyUsers as $companyUser): ?>
	<tr>
		<td><?php echo h($companyUser['CompanyUser']['id']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['display_name']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['passwd']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['active']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['created']); ?>&nbsp;</td>
		<td><?php echo h($companyUser['CompanyUser']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $companyUser['CompanyUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $companyUser['CompanyUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $companyUser['CompanyUser']['id']), null, __('Are you sure you want to delete # %s?', $companyUser['CompanyUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Company User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
