<div class="index">
    <h2><?php __('My Stores'); ?></h2>
    <p>Please ensure any information you enter are true and valid. Any data you choose to input will be displayed to all interested customers.</p>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('address'); ?></th>
            <th><?php echo $this->Paginator->sort('city'); ?></th>
            <th>Manage Store</th>
        </tr>
        <?php
        $i = 0;
        foreach ($stores as $store):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td><?php echo $store['Store']['name']; ?>&nbsp;</td>
                <td><?php echo $store['Store']['address']; ?>&nbsp;</td>
                <td><?php echo $store['Store']['city']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Manage', true), array('action' => 'store_view', $store['Store']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
        <?php
    $count = count($stores);
    if ($count == 0)
        echo "<p><i>You currently do not have any stores. Click " . $this->Html->link(__('Add a new store', true), array('action' => 'store_add')) . " to add now!</i></p>";
    ?>
    
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
        ));
        ?>	</p>

    <?php if ($this->Paginator->numbers()) { ?>
        <div class="paging">
            <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
    	 | 	<?php echo $this->Paginator->numbers(); ?>
            |
            <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
        </div>
    <?php } ?>

</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Add a new store', true), array('action' => 'store_add')); ?></li>
    </ul>
</div>
