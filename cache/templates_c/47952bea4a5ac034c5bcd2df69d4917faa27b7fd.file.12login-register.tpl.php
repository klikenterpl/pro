<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 06:19:02
         compiled from "D:\wamp\www\VIPstronymonki\pro\data\themes\katalog-firm\tpl_common\12login-register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322175c0839e129a4c2-08305951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47952bea4a5ac034c5bcd2df69d4917faa27b7fd' => 
    array (
      0 => 'D:\\wamp\\www\\VIPstronymonki\\pro\\data\\themes\\katalog-firm\\tpl_common\\12login-register.tpl',
      1 => 1544073537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322175c0839e129a4c2-08305951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c0839e129f172_86845625',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c0839e129f172_86845625')) {function content_5c0839e129f172_86845625($_smarty_tpl) {?>
    <div class="modal fade" id="myModalsix" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<form>
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h6>Nazwa użytkownika</h6>
		      </div>
		      <div class="modal-body">
		      	<div class="wm-modal-input">
		      		<ul>
		      			<li>Email</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      		<ul>
		      			<li>Hasło</li>
		      			<li> <input type="Password" > </li>
		      		</ul>
		      		<ul>
		      			<li></li>
		      			<li> <label><input type="checkbox"> Zapamiętaj hasło </label> </li>
		      		</ul>
		      	</div>
		      </div>
		      <div class="modal-footer">
		        <input class="wm-modalbtn wm-bgcolorhover" type="submit" value="Zaloguj">
		        <input class="wm-modalbtn wm-bgcolorhover" type="submit" value="Przypomnij hasło">
		      </div>
	      </form>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="myModalseven" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<form>
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h6>Register</h6>
		      </div>
		      <div class="modal-body">
		      	<div class="wm-modal-input">
		      		<ul>
		      			<li>First Name</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      		<ul>
		      			<li>Last Name</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      		<ul>
		      			<li>Email</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      		<ul>
		      			<li>Password</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      		<ul>
		      			<li>Confirm Password</li>
		      			<li> <input type="text"> </li>
		      		</ul>
		      	</div>
		      </div>
		      <div class="modal-footer">
		        <input class="wm-modalbtn wm-bgcolorhover" type="submit" value="Register Now">
		      </div>
	      </form>
	    </div>
	  </div>
	</div><?php }} ?>
