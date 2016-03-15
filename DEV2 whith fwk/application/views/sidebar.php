<div id="sidebar_container">
    <img class="paperclip" src="<?=  base_url()?>public/images/paperclip.png" alt="paperclip" />
    <div class="sidebar">
        <h3>Bulletin d'information</h3>
        <p>Si vous voulez recevoir notre bulletin d'infromation, entrez votre addresse e-mail et cliquez sur 'Souscrire'.</p>
        <form method="post" action="#" id="subscribe">
          <p style="padding: 0 0 9px 0;"><input class="search" type="text" name="email_address" value="your email address" onclick="javascript: document.forms['subscribe'].email_address.value=''" /></p>
          <p><input class="subscribe" name="subscribe" type="submit" value="Subscribe" /></p>
        </form>
    </div>
    <img class="paperclip" src="<?=  base_url()?>public/images/paperclip.png" alt="paperclip" />
    <div class="sidebar">
        <h3>Dernier article</h3>
        <h4><?=$posts[0]["post_title"];?></h4>
        <h5><?=date('d-m-Y h:i A',strtotime($posts[0]['date_added']))?></h5>
        <p><?=substr(strip_tags($posts[0]['post']), 0, 200).'...';?></p>
        <p><a href="<?=  base_url()?>blog/post/<?=$posts[0]['post_id']?>">En savoir plus</a></p>
    </div>
</div>

