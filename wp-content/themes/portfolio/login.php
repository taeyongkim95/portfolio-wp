<form action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
<ul class="unstyled noPadding noMargin fullwidth">
<li class="marginTen">
<label for="log">Username</label>
</br>
<input class="fullwidth" type="text" name="log" id="log" placeholder="Username" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>"  class="loginUsername" />
</li>
<li class="marginTen">
<label for="pwd">Password</label>
</br>
<input class="fullwidth" type="password" name="pwd" id="pwd" placeholder="Password" class="loginPassword" />

</br>

<a class="small" href="<?php echo get_option('home'); ?>/wp-login.php?action=lostpassword">Lost password?</a>
</li>
<li class="marginTen">
<input class="fullwidth" type="submit" name="submit" value="Log In" class="loginButton" />
</li>
<li class="marginTen">
<label style="font-size:14px; padding-bottom:15px; padding-top:5px;" for="rememberme">
<input style="margin-top:-4px; margin-right:3px;" name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> Remember me?</label>
</li>
</ul>
   <div class="clear"></div>
       <input type="hidden" name="redirect_to" value="<?php if(get_the_permalink() != "") { echo get_the_permalink(); } else { echo get_bloginfo('url'); } ?>" />
    
</form>
