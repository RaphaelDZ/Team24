<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<div id="site_content" class="container">
   <form id="myform" class="form-horizontal" action="<?=  base_url()?>index.php/blog/new_post/" method="post">
       <fieldset>

           <!-- Form Name -->
           <legend>Nouvelle annonce</legend>

           <!-- Text input-->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Titre</label>
               <div class="col-md-4">
                   <input id="textinput" name="post_title" type="text" class="form-control input-md">
                   
               </div>
           </div>

           <!-- Textarea -->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textarea">Description de l'annonce</label>
               <div class="col-md-4">
                   <textarea class="form-control" id="textarea" name="post"></textarea>
               </div>
           </div>

           <!-- Select Basic -->
           <div class="form-group">
               <label class="col-md-4 control-label" for="selectbasic">Categorie</label>
               <div class="col-md-4">
                   <select id="selectbasic" name="category_type" class="form-control"> 
<?php foreach ($categories as $category) : ?>
                   
                       <option value="<?= $category->category_id ?>"><?= $category->label ?></option>
                       <?php endforeach; ?>
                   </select>
               </div>
           </div>

           <!-- Button -->
           <div class="form-group">
               <label class="col-md-4 control-label" for="singlebutton"></label>
               <div class="col-md-4">
                   <button id="singlebutton" name="singlebutton" class="btn btn-primary" onClick="document.getElementById('myform').submit();">Poster</button>
               </div>
           </div>

       </fieldset>
   </form>
</div>