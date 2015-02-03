<?php echo $this->load->view('common/meta');?>
<div class="body">
  <div class="top_body">
    <div class="tips_area">
      <div class="tips_shadow"> </div>
      <div class="slogan_login">
        <div class="slogan_login_sperated_right">&nbsp;</div>
        <div class="slogan_login_sperated_left">&nbsp;</div>
      </div>
      <div class="logo_login"><img src="<?php echo base_url();?>images/login/regLogoNew.png" width="134" height="152" /></div>
    </div>
  </div>
  <div class="login_body">
    <form  ACTION="<?php echo base_url() ?>index.php/admin/login" method="post">
    <div class="login_contant_area">
      <div class="login_title">إسم الدخول</div>
      <div class="user_text_area">
        <input type="text" name="username" id="username" class="text_field" />
      </div>
      <div class="pass_title">كلمة المرور</div>
      <div class="pass_text_area">
        <input  type="password" name="userpassword" id="userpassword" class="text_field" />
      </div>
      <div class="write_data"><span class="red_star">*</span> <span class="light_gray">أملئ بيانات الدخول </span></div>
      <div class="submit_area">
        <div class="login_submit_area"><a href="home.html">
          <input type="submit" class="login_submit_btn" value="تسجيل دخول"  />
          </a></div>
      </div>
    </div>
    </form>
  </div>
<?php echo $this->load->view('common/footer');?>
