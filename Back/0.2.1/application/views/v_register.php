<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="site_content">
    <div id="content">
        <!-- insert the page content here -->
        <h1>Enregistré comme nouvel utilisateur</h1>
        <?php if($error){echo '<div style="color:red;">'.$error.'</div>'; }?>
        
        <form action="<?=  base_url()?>users/register/" method="post">
            <div class="form_settings">
                <p><span>Identifiant</span><input class="" type="text" name="username" value="" /></p>
                <p><span>E-Mail</span><input class="" type="email" name="email" value="" /></p>
                <p><span>Mot de passe</span><input class="" type="password" name="password" value="" /></p>
                <p><span>Confirmation mot de passe</span><input class="" type="password" name="passconf" value="" /></p>
                <p><span>Type d'utilisateur</span>
                    <select class="form-control" name="user_type">  
                    <option value="author">Auteur</option>
                    <option value="user" selected>Utilisateur</option>
                </select>
                <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="add" value="Register" /></p>
            </div>
        </form>
    </div>
</div>