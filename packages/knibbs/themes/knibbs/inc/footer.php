<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
</div><?php // end .#mc ?>
</div><?php // end .page-wrap ?>
<div class="mc">
    <div id="footer">
        <div class="footer-container">
            <section class="row footer-content">
                <article class="eight columns">
                    <?php  $a = new GlobalArea('Footer Area 1'); $a->display($c);?>
                </article>
                <article class="four columns align-right">
                    <?php  $a = new GlobalArea('Footer Arae 2'); $a->display($c); ?>
                </article> 
            </section>
            <section class="row">
                <article class="five columns footer-copyright">
                    <p>&copy; <?php  echo date('Y')?> <?php  echo SITE?></p>
                </article>
                <article class="seven columns footer-sign-in align-right">
                    <p>
                    <span class="underline">
                    <?php  
                    $u = new User();
                    if ($u->isRegistered()) { ?>
                    <?php   
                    if (Config::get("ENABLE_USER_PROFILES")) {
                    $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
                    } else {
                    $userName = $u->getUserName();
                    } ?>
                    <?php  echo t('Currently logged in as <strong>%s</strong> -', $userName)?> <!--<a href="<?php  echo $this->url('/profile')?>"><?php  echo t('Profile')?></a> | ?>--><a href="<?php  echo $this->url('/login', 'logout')?>"><?php  echo t('logout')?></a>
                    <?php   } else { ?>
                    <a href="<?php  echo $this->url('/login')?>"><?php  echo t('Log In')?></a>
                    <?php   } ?>
                    </span>
                    &nbsp; | &nbsp; <a href="http://www.knibbs.co.uk/" target="_blank">Designed by Knibbs</a>
                    </p>
                </article>
            </section>
        </div>
    </div><?php // end #footer ?>
</div><?php // end .mc ?>
</div><?php // end .knibbs-inner ?>
</div><?php // end .knibbs-outer ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/hammer.min.js"></script>
<script src="<?=$this->getThemePath()?>/js/plugin/jquery.flexmenu.js"></script>
<script src="<?=$this->getThemePath()?>/js/main.js"></script>
<script>Menu(); function Menu() { $("#menu").show(); }</script>
<?php   Loader::element('footer_required'); ?>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->