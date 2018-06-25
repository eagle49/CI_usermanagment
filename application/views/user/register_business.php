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

  p.helpNotify {
    margin: 10px 0;
    font-size: 1em;
    line-height: 20px;
    color: #666;
    display: inline-block;
  }

  p a {
    color: #0666b3;
    font-weight: 700;
    text-decoration: none;
  }

  p a:hover {
    text-decoration: none;
    color: #0666b3;
  }
  .form-header {
        text-align: center;
        color: grey;
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
          <div class="form-group col-md-12 form-header">
            <h3>Create your Business Account</h3>
          </div>
          
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
            <?php echo form_input(array('name'=>'birthday', 'value'=>set_value('birthday', (isset($user['birthday']) ? $user['birthday'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button t_business'); ?></label>
            <?php echo form_dropdown('t_business', $this->t_business, (isset($user['t_business']) ? $user['t_business'] : $this->config->item('t_business')), 'id="t_business" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button business_name'); ?></label>
            <?php echo form_input(array('name'=>'business_name', 'value'=>set_value('business_name', (isset($user['business_name']) ? $user['business_name'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-9">
            <label for="exampleInputEmail1"><?php echo lang('core button business phonenumber'); ?></label>
            <?php echo form_input(array('name'=>'phone_number', 'value'=>set_value('phone_number', (isset($user['phone_number']) ? $user['phone_number'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1"><?php echo lang('core button business address'); ?></label>
            <?php echo form_input(array('name'=>'business_address', 'value'=>set_value('business_address', (isset($user['business_address']) ? $user['business_address'] : '')), 'class'=>'form-control', 'type'=>'text')); ?>
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputEmail1"><?php echo lang('core button postal_code'); ?></label>
            <?php echo form_input(array('name'=>'postal_code', 'value'=>set_value('postal_code', (isset($user['postal_code']) ? $user['postal_code'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputEmail1"><?php echo lang('core button city'); ?></label>
            <?php echo form_input(array('name'=>'city', 'value'=>set_value('city', (isset($user['city']) ? $user['city'] : '')), 'class'=>'form-control')); ?>
          </div>
          <div class="form-group col-md-4">
            <label for="exampleInputEmail1"><?php echo lang('core button province'); ?></label>
             <?php echo form_dropdown('province', $this->provinces, (isset($user['province']) ? $user['province'] : $this->config->item('province')), 'id="province" class="form-control"'); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button password'); ?></label>
            <?php echo form_password(array('name'=>'password', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1"><?php echo lang('core button re_password'); ?></label>
            <?php echo form_password(array('name'=>'password_repeat', 'value'=>'', 'class'=>'form-control', 'autocomplete'=>'off')); ?>
          </div>
          <div class="form-group col-md-12">
          <!-- <p class="helpNotify">By clicking the button below, I agree to 
            <a href="#" target="_blank">JustWallet`s User Agreement</a>, 
            <a href="#" target="_blank">Privacy Policy</a>, and the 
            <a href="#" target="_blank">Acceptable Use Policy</a>
          </p> -->
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