<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Votre fichier a été correctement téléchargé</h1>
        <ul>

            <?php foreach($upload_data as $key => $value)
            {?>
            <li> <?=$key?> : <?=$value?></li>
            <?php 
            }?>
        </ul>
        <p><a href="<?=  base_url()?>upload/">Téléchargé un autre fichier</a></p>
    </div>
</div>