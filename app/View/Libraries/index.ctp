<div class="libraries index">
	<h2><?php echo __('Libraries'); ?></h2>
	<?php
		echo "test";
		$foo = $this->request->data('https://api.themoviedb.org/3/find/tt0266543?external_source=imdb_id&api_key=fd1ff8e65ebdb3ceb5501d982f9b6e21');
		echo $foo;
	?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($libraries as $library):	?>
	<tr>
		<?php if($library['User']['id'] == AuthComponent::user('id')) { ?>
		<td><?php echo h($library['Library']['id']); ?>&nbsp;</td>
		<td><?php echo h($library['Library']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($library['User']['id'], array('controller' => 'users', 'action' => 'view', $library['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $library['Library']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $library['Library']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $library['Library']['id']), null, __('Are you sure you want to delete # %s?', $library['Library']['id'])); ?>
		</td>
	</tr>
	<?php }
		endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Library'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movies'), array('controller' => 'movies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movie'), array('controller' => 'movies', 'action' => 'add')); ?> </li>
	</ul>
</div>
