<div class="companyUsers view">
<h2><?php echo __('Company User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Display Name'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['display_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passwd'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['passwd']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($companyUser['CompanyUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Company User'), array('action' => 'edit', $companyUser['CompanyUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Company User'), array('action' => 'delete', $companyUser['CompanyUser']['id']), null, __('Are you sure you want to delete # %s?', $companyUser['CompanyUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Company Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Companies'), array('controller' => 'companies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($companyUser['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company User Id'); ?></th>
		<th><?php echo __('Submission Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Comment Text'); ?></th>
		<th><?php echo __('Comment Type'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyUser['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['company_user_id']; ?></td>
			<td><?php echo $comment['submission_id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['comment_text']; ?></td>
			<td><?php echo $comment['comment_type']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Companies'); ?></h3>
	<?php if (!empty($companyUser['Company'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Company User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Domain'); ?></th>
		<th><?php echo __('Website'); ?></th>
		<th><?php echo __('Email Address'); ?></th>
		<th><?php echo __('Googleplacesid'); ?></th>
		<th><?php echo __('Google Places Data'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($companyUser['Company'] as $company): ?>
		<tr>
			<td><?php echo $company['id']; ?></td>
			<td><?php echo $company['company_user_id']; ?></td>
			<td><?php echo $company['name']; ?></td>
			<td><?php echo $company['domain']; ?></td>
			<td><?php echo $company['website']; ?></td>
			<td><?php echo $company['email_address']; ?></td>
			<td><?php echo $company['googleplacesid']; ?></td>
			<td><?php echo $company['google_places_data']; ?></td>
			<td><?php echo $company['created']; ?></td>
			<td><?php echo $company['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'companies', 'action' => 'view', $company['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'companies', 'action' => 'edit', $company['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'companies', 'action' => 'delete', $company['id']), null, __('Are you sure you want to delete # %s?', $company['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Company'), array('controller' => 'companies', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
