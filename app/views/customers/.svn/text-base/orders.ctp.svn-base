
<?php
echo $javascript->link('/js/customer.js');
$javascript->link('jquery.countdown.js', false);
echo $this->Html->css('jquery.countdown.css');

$this->Paginator->options(array(
    'update' => '#content',
    'evalScripts' => true
));
?>

<script type="text/javascript">
    $(function () {
        var date = new Date();
<?php
$i = 1;

foreach ($orders as $order) {
    if ($order['Order']['complete'] == 0) {
        $seconds = $timeLeft[$order["Order"]["id"]]["seconds"];
        $minutes = $timeLeft[$order["Order"]["id"]]["minutes"];
        $hours = $timeLeft[$order["Order"]["id"]]["hours"];

        echo "
                var seconds=(date.getSeconds()+$seconds)%60;
                var secondsRem=(date.getSeconds()+$seconds)/60;
                var minutes=(date.getMinutes()+$minutes+secondsRem)%60;
                var minutesRem=(date.getMinutes()+$minutes+secondsRem)/60;
                var hours=(date.getHours()+$hours+minutesRem);
                $(\"#countdown$i\").countdown({until: new Date(date.getFullYear(), date.getMonth(), date.getDate(), hours, minutes, seconds), expiryUrl:\"$this->here\", format: \"hMS\"});
                ";
    }
    $i++;
}
?>
                });
</script>

<div>
    <h2><?php __('My Orders'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Image</th>
            <th><?php echo $this->Paginator->sort('Order', 'SetMenu.name'); ?></th>
            <th><?php echo $this->Paginator->sort('Store', 'Store.name'); ?></th>
            <th><?php echo $this->Paginator->sort('Price', 'total_amount'); ?></th>
            <th><?php echo $this->Paginator->sort('Calories', 'total_calorie'); ?></th>
            <th><?php echo $this->Paginator->sort('Order Date', 'confirm_datetime'); ?></th>
            <th><?php echo $this->Paginator->sort('Status', 'complete'); ?></th>
            <th><?php echo $this->Paginator->sort('Order Type', 'delivery_type'); ?></th>
            <th>Action</th>  
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
                <td width="1px"><?php echo $this->Html->image('/img/food/' . (($order['SetMenu']['id']) % 30) . '.jpg', array('url' => '/img/food/' . (($order['SetMenu']['id']) % 30) . '.jpg', 'width' => 100, 'height' => 75)); ?></td>
                <td><?php echo $order['SetMenu']['name']; ?> </td>
                <td><?php echo $order['Store']['name']; ?> </td>
                <td><?php echo $order['Order']['total_amount']; ?></td>
                <td><?php echo $order['Order']['total_calorie']; ?></td>
                <td><?php echo $order['Order']['confirm_datetime']; ?></td>
                <td>
                    <?php
                    if ($order['Order']['complete'] == 1)
                        echo "Complete";
                    else
                        echo "<div id=\"countdown$i\"></div> \n";
                    ?>
                </td>
                <td>
                    <?php
                    if ($order['Order']['delivery_type'] == 0)
                        echo "Delivery";
                    else if ($order['Order']['delivery_type'] == 1)
                        echo "Dine In";
                    else
                        echo "Takeout";
                    ?>
                </td>

                <td class="actions">
                    <?php
                    echo $this->Html->link(__('Details', true), array('action' => 'orders_details', $order['Order']['id']));
                    echo '<br />';

                    if ($order['Order']['delivery_type'] != 0) {
                        echo $html->link('Directions', '#', array('onclick' => "var openWin = window.open('" . $html->url(array('action' => 'order_directions', $order['Order']['id'])) . "', '_blank', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=810,height=525');  return false;"));
                        echo '<br />';
                    }

                    if ($order['Order']['complete'] == 1) {
                        // allow reorder of previous orders
                        echo $this->Html->link(__('Re-Order', true), array('action' => 'checkout', $order['SetMenu']['id']));
                        echo '<br />';
                        echo $this->Html->link(__('Post a Review', true), array('action' => 'food_reviews_new', $order['Order']['id']));
                    }
                    ?>

                </td>
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

<?php
echo $this->Js->writeBuffer();
?>