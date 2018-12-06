<?php /* Smarty version Smarty-3.1.18, created on 2018-12-06 15:26:33
         compiled from "G:\wamp\www\pro\data\themes\katalog-firm\tpl_common\12login-register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252215c093199d2f0b7-18327762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd267cbac440ad168380fcd53b2fd3c51a786842d' => 
    array (
      0 => 'G:\\wamp\\www\\pro\\data\\themes\\katalog-firm\\tpl_common\\12login-register.tpl',
      1 => 1544103900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252215c093199d2f0b7-18327762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5c093199d325d7_47728990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c093199d325d7_47728990')) {function content_5c093199d325d7_47728990($_smarty_tpl) {?>
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
