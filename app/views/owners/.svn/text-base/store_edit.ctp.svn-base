<div class="stores form">
    <?php echo $this->Form->create('Owner', array("url"=>"/".$this->params['url']['url'])); ?>
    <fieldset>
        <legend><?php __('Edit Store'); ?></legend>
        <?php
        echo $this->Form->input('Store.id');
        echo $this->Form->input('Store.cuisine_type_id');
        echo $this->Form->input('Store.name');
        echo $this->Form->input('Store.description');
        echo $this->Form->input('Store.phone');
        echo $this->Form->input('Store.address');
        echo $this->Form->input('Store.city');
        echo $this->Form->input('Store.province');
        echo $this->Form->input('Store.postal');
        echo $this->Form->input('Store.country');

        echo $this->Form->input('Store.open_hrs');
        echo $this->Form->input('Store.close_hrs');
        echo "<br/>Services offered (if you wish have you set menus displayed, please check at least one of the following):";
        echo $this->Form->input('Store.dine_in');
        echo $this->Form->input('Store.takeout');
        echo $this->Form->input('Store.delivery');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
    <h3><?php __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Back to Store Information', true), array('action' => 'store_view', $id)); ?></li>
    </ul>
</div>
