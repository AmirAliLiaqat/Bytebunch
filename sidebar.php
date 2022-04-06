<?php
/**
 * Sidebar File.
 *
 * @package ByteBunch
*/
?>

    <aside class="sidebar">
        <div class="widget widget_search">
            <?php dynamic_sidebar('main-sidebar'); ?>
        </div><!--widget-->
        <div class="widget subscribe ">
            <h3 class="widget_title">SUBSCRIBE</h3>
            <form action="#" method="post" class="subscribe_form">
                <p>Sign up to be the first to know our newest products, updates and events.</p>
                <input type="email" value="" placeholder="Email Address" name="email" required="required">
                <input type="submit" value="Subscribe">
                <div style="margin-top:20px;">
                    <span class="ajax_loader d-none">
                        Processing... <img src="https://test.bytebunch.com/wp-content/themes/bbblog/images/loadingAnimation.gif" alt="" style="width: 100%;margin-top:5px;">
                    </span>
                    <span class="ajax_message"></span>
                </div>
            </form>
        </div><!--widget-->
        <div class="clearboth"></div>
        <div class="widget tags">
            <h3 class="widget_title">Tags</h3>
            <div class="tagcloud">
                <a href="">apache</a>
                <a href="">Custom</a>
                <a href="" style="font-size: 20px;">Linux</a>
                <a href="">Linux</a>
                <a href="">Metabox</a>
                <a href="">Metabox UI</a>
                <a href="">node.js</a>
                <a href="">nodejs</a>
                <a href="">php</a>
                <a href="">Plugins</a>
                <a href="">postfix</a>
                <a href="">Ubuntu</a>
                <a href="">Ubuntu 20.04</a>
                <a href="" style="font-size: 18.310344px;">Uncategorized</a>
                <a href="">Windows</a>
                <a href="">Wordpress</a>
            </div><!--tagcloud-->
            <div class="clearboth"></div>
        </div><!--widget-->
        <div class="widget popular_posts" style="padding: 0;">
            <ul class="tabbed_menu"  style="margin:0; padding: 0;">
                <li class="current-menu-item"><a href="#recent_posts">Recent Posts</a></li>
                <li><a href="#popular_posts">Popular Posts</a></li>
            </ul>
            <div class="clearboth"></div>
            <div class="tab_menu_content current-content-cantainer" id="recent_posts">
                <ul class="" style="margin: 0; padding: 0; margin-top: 20px;">
                    <li>
                        <div class="info" style="margin-top: 60px;">
                            <span class="widgettitle">
                                <a href=""></a>
                            </span>
                            <span class="post_meta">Oct 17, 2021</span>
                        </div>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <div class="info">
                            <span class="widgettitle">
                                <a href="">How To Set Up and Configure an OpenVPN Server on Ubuntu 20.04</a>
                            </span>
                            <span class="post_meta">Sep 02, 2021</span>
                        </div>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <div class="info">
                            <span class="widgettitle">
                                <a href="" title="How to Restrict SFTP Users to Home Directories Using chroot Jail – Ubuntu 20.04">How to Restrict SFTP Users to Home Directories Using chroot Jail – Ubuntu 20.04</a>
                            </span>
                            <span class="post_meta">Nov 14, 2020</span>
                        </div>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <div class="info">
                            <span class="widgettitle">
                                <a href="" title="Set Up Authoritative DNS Server on Ubuntu 18.04, 16.04 with BIND9">Set Up Authoritative DNS Server on Ubuntu 18.04, 16.04 with BIND9</a>
                            </span>
                            <span class="post_meta">Oct 11, 2019</span>
                        </div>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <div class="info">
                            <span class="widgettitle">
                                <a href="" title="Email with Postfix, Dovecot, and MySQL on Ubuntu 18.04">Email with Postfix, Dovecot, and MySQL on Ubuntu 18.04</a>
                            </span>
                            <span class="post_meta">Oct 07, 2019</span>
                        </div>
                        <div class="clearboth"></div>
                    </li>	      
                </ul>
            </div>
        </div><!--widget-->
    </aside>