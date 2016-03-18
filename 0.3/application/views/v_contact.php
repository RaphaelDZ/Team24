
<div id="site_content" class="contact container">
   <form class="form-horizontal" id="myform" action="<?= base_url() ?>index.php/blog/contact/" method="post">
       <fieldset>

           <!-- Form Name -->
           <legend>Contact</legend>

           <?php

           class Contact
           {

               var $validate = array(
                   'nom' => array(
                       'rule' => 'notEmpty',
                       'message' => 'Vous devez préciser votre nom'
                   ),
                   'email' => array(
                       'rule' => '([_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9]+)*)',
                       'message' => 'Vous devez saisir une adresse email valide'
                   ),
                   'content' => array(
                       'rule' => 'notEmpty',
                       'message' => 'Vous devez saisir un texte'
                   )
               );


           } ?>


           <!--Text input-->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textinput"> Nom</label>
               <div class="col-md-4">
                   <input id="textinput" name="nom" type="text" class="form-control input-md">

               </div>
           </div>

           <!--Text input-->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textinput"> Email</label>
               <div class="col-md-4">
                   <input id="textinput-2" name="email" type="email" class="form-control input-md">

               </div>
           </div>

           <!--Textarea -->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textarea"> Message</label>
               <div class="col-md-4"><textarea name="message" class="form-control"></textarea></div>
           </div>

           <!--Button -->
           <div class="form-group">

               <div class="col-md-4">
                   <button id="singlebutton" name="add" value="login" class="btn btn-primary"> Envoyer</button>
               </div>
           </div>

       </fieldset>
   </form>
</div>