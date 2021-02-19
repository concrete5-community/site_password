<?php

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Support\Facade\Url;

/**
 *
 * If you wish to customize this file, please copy it to
 * /application/views/site_password/site_password_login.php
 *
 */

/** @var \Concrete\Core\Validation\CSRF\Token $token */
/** @var \Concrete\Core\Form\Service\Form $form */
/** @var string $baseUrl */
/** @var string|null $error */
?>

<link href="<?php echo $baseUrl . '/concrete/css/app.css'; ?>" rel="stylesheet" type="text/css" media="all">

<div class="ccm-ui">
    <div class="controls" id="site-password-form">
        <form method="post">
            <?php
            $token->output('site_password.login');
            ?>

            <h3><?php echo t('Sign in'); ?></h3>

            <p>
                <small>
                    <?php
                    echo t('A password is required to view this website.');
                    ?>
                </small>
            </p><br>

            <?php
            if ($error) {
                ?>
                <div class="alert alert-danger">
                    <div>
                         <?php
                        echo h($error);
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="form-group">
                <?php
                echo $form->label('password', t('Password'));
                echo $form->password('password', null, [
                    'autofocus' => 'autofocus',
                    'style' => 'min-width: 250px;',
                ]);
                ?>
            </div>

            <div class="form-group">
                <button class="btn btn-primary">
                    <?php echo t('Login'); ?>
                </button>
            </div>
        </form>
    </div>
</div>

<style>
#site-password-form {
    margin: 40px;
    max-width: 500px;
}
</style>
