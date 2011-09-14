<div class="paymentMethods index">
    <h2><?php __('Payment Methods'); ?></h2>
    <br/>
    <?php echo $this->Html->link(__('Add a New Payment Method', true), array('action' => 'payment_add')); ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Credit Card Type</th>
            <th>Name</th>
            <th>Edit/Delete</th>

        </tr>
        <?php
        $i = 0;
        foreach ($paymentMethods as $paymentMethod):
            $class = null;
            if ($i++ % 2 == 0) {
                $class = ' class="altrow"';
            }
            ?>
            <tr<?php echo $class; ?>>
                <td>
                    <?php echo $paymentMethod['PaymentType']['name']; ?>
                </td>
                <td><?php echo $paymentMethod['PaymentMethod']['name']; ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit', true), array('action' => 'payment_edit', $paymentMethod['PaymentMethod']['id'])); ?>
                    <?php echo $this->Html->link(__('Delete', true), array('action' => 'payment_delete', $paymentMethod['PaymentMethod']['id']), null, sprintf(__('Are you sure?', true), $paymentMethod['PaymentMethod']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include('info_action.ctp'); ?>