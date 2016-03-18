<div id="site_content" class="register container">

    <form class="form-horizontal" action="<?=  base_url()?>index.php/users/register/" method="post" id="myform">
        <fieldset>

            <!-- Form Name -->
            <legend>Inscription</legend>

                <?php if($error){echo '<div style="color:red;">'.$error.'</div>'; }?>
            
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">Identifiant</label>
                <div class="col-md-4">
                    <input id="textinput" name="username" type="text" class="form-control input-md">
                    
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">E-mail</label>
                <div class="col-md-4">
                    <input id="textinput" name="email" type="text" class="form-control input-md">
                    
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
                <div class="col-md-4">
                    <input id="passwordinput" name="password" type="password" class="form-control input-md">
                    
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="passwordinput">Répétez le mot de passe</label>
                <div class="col-md-4">
                    <input id="passwordinput" name="passconf" type="password" class="form-control input-md">
                    
                </div>
            </div>

             <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Type d'utilisateur</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="user_type" class="form-control">
                            <option value="user">Utilisateur</option>
                            <option value="author">École</option>
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



    
      
                  