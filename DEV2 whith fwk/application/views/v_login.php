<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Connexion</h1>
        <form action="<?=  base_url()?>users/login/" method="post">
            <div class="form_settings">
                <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Hmm, we don\'t recognize you. Please try again.</div><br>';
                    }?>
                <p><span>Identifiant</span><input class="" type="text" name="username" value="" /></p>
                <p><span>Mot de passe</span><input class="" type="password" name="password" value="" /></p>
                <p><span>Type d'utilisateur</span>
                    <select class="form-control" name="user_type">
                    <option value="admin">Admin</option>
                    <option value="author">Auteur</option>
                    <option value="user" selected>Utilisateur</option>
                </select>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Login" /></p>
            </div>
        </form>
    </div>
</div>