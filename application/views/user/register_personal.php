<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
  .form-group {
    margin-bottom: 5px;
  }

  label {
    margin-bottom: 2px;
  }

  .g-recaptcha {
    margin-top: 15px;
  }
</style>
<div class="header-st mb-4">
			<div class="container">
				<div class="row">
          <div class="col-md-12">
            <h3>
              <?php echo lang('core personal create'); ?>
            </h3>
          </div>
        </div>
  </div>
</div>
<div class="container">
<div class="row mt-5 mb-5">
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-body">
        <?php echo form_open('', array('role'=>'form')); ?>
        <div class="row">
          
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button username'); ?></label>
            <?php echo form_input(array('name'=>'username', 'value'=>set_value('username', (isset($user['username']) ? $user['username'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button email'); ?></label>
            <?php echo form_input(array('name'=>'email', 'value'=>set_value('email', (isset($user['email']) ? $user['email'] : '')), 'class'=>'form-control', 'type'=>'email')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button first_name'); ?></label>
            <?php echo form_input(array('name'=>'first_name', 'value'=>set_value('first_name', (isset($user['first_name']) ? $user['first_name'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button last_name'); ?></label>
            <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('last_name', (isset($user['last_name']) ? $user['last_name'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button birthday'); ?></label>
            <?php echo form_input(array('name'=>'last_name', 'value'=>set_value('birthday', (isset($user['birthday']) ? $user['birthday'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button t_business'); ?></label>
            <?php echo form_dropdown('t_business', $this->t_business, (isset($user['t_business']) ? $user['t_business'] : $this->config->item('t_business')), 'id="t_business" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button residential_address1'); ?></label>
            <?php echo form_input(array('name'=>'residential_address1', 'value'=>set_value('residential_address1', (isset($user['residential_address1']) ? $user['residential_address1'] : '')), 'class'=>'form-control', 'type'=>'text')); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button residential_address2'); ?></label>
            <?php echo form_input(array('name'=>'residential_address2', 'value'=>set_value('residential_address2', (isset($user['residential_address2']) ? $user['residential_address2'] : '')), 'class'=>'form-control', 'type'=>'text')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button postal_code'); ?></label>
            <?php echo form_input(array('name'=>'postal_code', 'value'=>set_value('postal_code', (isset($user['postal_code']) ? $user['postal_code'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button city'); ?></label>
            <?php echo form_input(array('name'=>'city', 'value'=>set_value('city', (isset($user['city']) ? $user['city'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button province'); ?></label>
             <?php echo form_dropdown('province', $this->provinces, (isset($user['province']) ? $user['province'] : $this->config->item('province')), 'id="province" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-3">
            <label for="exampleInputEmail1"><?php echo lang('core button phone_type'); ?></label>
             <?php echo form_dropdown('phone_type', $this->phone_types, (isset($user['phone_type']) ? $user['phone_type'] : $this->config->item('phone_type')), 'id="phone_type" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-9">
            <label for="exampleInputEmail1">&nbsp;</label>
            <?php echo form_input(array('name'=>'phone_number', 'value'=>set_value('phone_number', (isset($user['phone_number']) ? $user['phone_number'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button language'); ?></label>
             <?php echo form_dropdown('language', $this->languages, (isset($user['language']) ? $user['language'] : $this->config->item('language')), 'id="language" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button password'); ?></label>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button re_password'); ?></label>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
                <div class="g-recaptcha" data-sitekey="<?php echo $this->settings->google_site_key; ?>"></div>
              </div>
            <div class="col-md-6">
              <a href="<?php echo base_url('login'); ?>"><?php echo lang('core button back_login'); ?></a></br>
            </div>
            <div class="col-md-6 text-right">
              <button type="submit" class="btn btn-success"><?php echo lang('core button register'); ?></button>
            </div>
          </div>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>
</div>
</div>