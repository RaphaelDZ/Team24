<div id="site_content" class="login container">
    <form class="form-horizontal" id="myform" action="<?=  base_url()?>index.php/users/login/" method="post">
        <fieldset>

            <!-- Form Name -->
            <legend>Connexion</legend>

            <?php
                    if($error)
                    {
                        echo '<div style="color:red" >Nous ne vous avons pas reconnus. Veuilliez recommencer.</div><br>';
                    }?>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Identifiant</label>
                    <div class="col-md-4">
                        <input id="textinput" name="username" type="text" class="form-control input-md">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
                    <div class="col-md-4">
                        <input id="passwordinput" name="password" type="password" class="form-control input-md">

                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Type d'utilisateur</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="user_type" class="form-control">
                            <option value="user">Utilisateur</option>
                            <option value="author">École</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    
                    <div class="col-md-4">
                        <button id="singlebutton" name="add" value="login" class="btn btn-primary" onClick="document.getElementById('myform').submit();">Se connecter</button>
                    </div>
                </div>

        </fieldset>
    </form>








    
</div>
