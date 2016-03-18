<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="site_content" class="container">
   <form id="myform" class="form-horizontal" action="<?=  base_url()?>index.php/blog/editpost/<?=$post['post_id']?>" method="post">
       <fieldset>

           <!-- Form Name -->
           <legend>Modifier la publication</legend>

           <!-- Text input-->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textinput">Titre</label>
               <div class="col-md-4">
                   <input id="textinput" name="post_title" type="text" class="form-control input-md" value="<?=$post['post_title'];?>">
                   
               </div>
           </div>

           <!-- Textarea -->
           <div class="form-group">
               <label class="col-md-4 control-label" for="textarea">Description de l'annonce</label>
               <div class="col-md-4">
                   <textarea class="form-control" id="textarea" name="post"><?=$post['post'];?></textarea>
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