<style>
.pop_bg{ float:left; width:483px; margin-left: 78px;background-image:url(http://localhost/sharie/magento/skin/frontend/default/default/images/pop_bg.png); height:456px; position:relative;!important}
.pop_up{ width:483px; height:553px; text-align:center; }
.pop_logo1{ text-align:center; width:100%; height:auto; margin-bottom:10px;}
.pop_logo1 img{ width:203px; height:76px; margin:auto;}
.btm_lft_2{position:absolute; width:300px; height:auto; margin-top:295px; margin-bottom:5px; margin-right:44px; right:0;}
.btm_lft_2 ul{ float:left; width:100%; height:auto;}
.btm_lft_2 ul li{float:left; width:100%; height:auto; list-style: none outside none;}


.txt_bx1 input.box5 {
    background-color: #E5E5E5;
    border: 0 none;
    color: #828282;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 13px;
    height: 30px;
    text-align: left;
    text-indent: 5px;
    width: 261px;
}
.txt17 {
    color: #000000;
    float: left;
    font-size: 14px;
    font-weight: bold;
    margin-top: 5px;
    text-align: left;
}

.btn_sec {
    float: right;
    height: auto;
    margin-top: 10px;
    width: 206px;
}
.btn1 {
    float: left;
    height: auto;
}
.btn1 input.btnn {
  background-color: #000000;
  border: 1px solid #616161;
  color: #AAAAAA;
  cursor: pointer;
  float: left;
  font-family: Arial,Helvetica,sans-serif;
  font-size: 12px;
  font-weight: bold;
  height: 26px;
  width: 56px;
}
.txt18 {
    color: #000000;
    float: right;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 10px;
    text-align: left;
    width: 140px;
}
</style>
<?php //print_r($_REQUEST); ?>
<div class="pop_up"><div class="pop_logo1"><a href="#"><img src="http://localhost/sharie/magento/skin/frontend/default/default/images/logo2.png" alt="logo" width="203" height="76" /></a></div>
<div class="pop_bg">
<div class="btm_lft_2">
<form method="post" action="">
<ul>
<li>
<div class="txt_bx1"><input class="box5" name="email" type="text" value="you@gmail.com" /></div>
<div class="txt17">EMAIL</div>
</li>
<li style="margin-top: 5px;">
<div class="txt_bx1"><input class="box5" name="password" type="password" /></div>
<div class="txt17">PASSWORD</div>
<div class="btn_sec">
<div class="btn1"><input class="btnn" type="submit" value="SUBMIT" name="btnsubmit" /></div>
<div class="txt18">BY HITTING SUBMIT YOU AGREE TO SHARIES <a href="http://localhost/sharie/magento/terms" > TERMS AND CONDITIONS</a></div>
</div>
</li>
</ul>
</form>
</div>
</div>
</div>