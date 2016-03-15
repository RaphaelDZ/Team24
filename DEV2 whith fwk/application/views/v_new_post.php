<div id="site_content">
    <div id="content">
        
        <h1>Nouvelle publication</h1>
        <form action="<?=  base_url()?>blog/new_post/" method="post">
          <div class="form_settings">
            <p><span>Titre</span><input class="" type="text" name="post_title" value="" /></p>
            <p><span>Description</span><textarea class="textarea" rows="15" cols="50" name="post"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Publish" /></p>
          </div>
        </form>
    </div>
</div>