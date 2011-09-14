<div class="orders index">
    <?php echo $this->Form->create('Owner', array('action' => 'history')); ?>
    
    <h3>Store's Order History</h3>
    
        Please select a store:
        <?php
        echo $this->Form->select('stores', $stores);
//		echo $this->Form->input('store_id', array('label' => 'Select a store:'));
        ?>

    <?php echo $this->Form->end(__('Update', true)); ?>
    <div>
        <table>
            <tr>
                <th><?php echo $this->Paginator->sort('Order', 'set_menu_id'); ?></th>
                <th><?php echo $this->Paginator->sort('Price', 'total_amount'); ?></th>
                <th><?php echo $this->Paginator->sort('Calories', 'total_calorie'); ?></th>
                <th><?php echo $this->Paginator->sort('Order Date', 'confirm_datetime'); ?></th>
                <th><?php echo $this->Paginator->sort('Status', 'complete'); ?></th>
            </tr>
            <?php
            $i = 0;
            foreach ($orders as $order):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td>
                        <?php echo $order['SetMenu']['name']; ?>
                    </td>
                    <td><?php echo $order['Order']['total_amount']; ?>&nbsp;</td>
                    <td><?php echo $order['Order']['total_calorie']; ?>&nbsp;</td>
                    <td><?php echo $order['Order']['confirm_datetime']; ?></td>
                    <td><?php if ($order['Order']['complete'] == 1)
                        echo "Complete"; else
                        echo "Pending"; ?>&nbsp;
                   <!-- <td class="actions">
                <?php //if($order['Order']['complete'] == 0)echo $this->Html->link(__('Mark as Completed', true), array('action' => 'orders_complete', $order['Order']['id']));  ?>
                    </td>-->
                </tr>
            <?php endforeach; ?>
        </table>
        <p>
            <?php
            echo $this->Paginator->counter(array(
                'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
            ));
            ?>	</p>

        <div class="paging">
            <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
	 | 	<?php echo $this->Paginator->numbers(); ?>
            |
<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
        </div>
    </div>
</div>
