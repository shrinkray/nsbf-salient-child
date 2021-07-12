<?php if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');} ?>

<?php if(isset($errors) && $errors != null && count($errors) > 0): ?>
<div class="mp_wrapper TEST11">
  <div class="mepr_error" id="mepr_jump">
    <ul>
      <?php foreach($errors as $error): ?>
        <li><strong><?php _ex('ERROR', 'ui', 'memberpress'); ?></strong>: <?php print $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </div>
  
  <?php 
    /* Begin template override */

    if( isset($_GET['action']) == 'reset_password' && isset($_GET['u']) ) :
  ?>

  <div id="link-expired">
        <p>If your password has expired and this is the latest email you've received, please follow the steps below to reset your password.</p>
        <ol>
            <li>
                <div>Copy your username for the <strong>Request a Password Reset</strong> form.</div>
                <div class="uname-expired">Username: <strong><?php echo $_GET['u']; ?></strong></div>
            </li>
            <li>Click link to go to the form to reset your password. <strong><a href="<?php echo home_url( '/login/?action=forgot_password' ) ?>">Request a Password Reset</a></strong></li>
        </ol>
  </div>

  <?php 
    endif;
    /* End template override */
  ?>

</div>
<?php endif; ?>

<?php if( isset($message) and !empty($message) ): ?>
<div class="mp_wrapper">
  <div class="mepr_updated"><?php echo $message; ?></div>
</div>
<?php endif; ?>
