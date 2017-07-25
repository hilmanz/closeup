
<div id="navigation" class="fadein delay2s">
    <span <?php if($_GET['menu']==''){ ?> class="current" <?php } ?> ><a href="index.php" class="home">&nbsp;</a></span>
    
    <span <?php if($_GET['menu']=='youtube'){ ?> class="current" <?php } ?>><a href="index.php?menu=youtube" class="youtube">&nbsp;</a></span>
    
    <span <?php if($_GET['menu']=='facebook'){ ?> class="current" <?php } ?>><a href="index.php?menu=facebook" class="facebook">&nbsp;</a></span>
    
    <span><a href="#popupTwitfeel" class="twitfeel popup">&nbsp;</a></span>
    
    <span <?php if($_GET['menu']=='twitter'){ ?> class="current" <?php } ?>><a href="index.php?menu=twitter" class="twitter">&nbsp;</a></span>
    
    <span><a href="#popupAddict" class="addict popup">&nbsp;</a></span>
    
    <span <?php if($_GET['menu']=='rss'){ ?> class="current" <?php } ?>><a href="index.php?menu=rss" class="rss">&nbsp;</a></span>
</div>