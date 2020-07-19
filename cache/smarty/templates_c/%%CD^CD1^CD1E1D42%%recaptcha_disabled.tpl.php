<?php /* Smarty version 2.6.31, created on 2020-07-19 21:34:43
         compiled from D:%5CProgramFiles%5COSPanel%5Cdomains%5CSuiteCrm7-Slim3%5Cinclude%5Cutils/recaptcha_disabled.tpl */ ?>
<?php echo '
<script>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById(\'username_password\').value = document.getElementById(\'new_password\').value;
      document.getElementById(\'ChangePasswordForm\').submit();
    }
</script>
'; ?>