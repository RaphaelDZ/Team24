
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div id="site_content">

   <div id="content" class="container">

       <form action="<?= base_url() ?>index.php/blog/new_post/" method="post">
           <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != '') { ?>
               <!-- Indicates a successful or positive action -->
               <div><a href="<?= base_url() ?>index.php/blog/new_post/"><button type="button" class="btn btn-success"><span
                           class="glyphicon glyphicon-pencil"></span>Nouvelle annonce</button></a></div>
               <?php } ?>
                   <?php foreach ($posts as $post) { ?>
           <div class="col-lg-4">            
           <div class="panel">
                           <div class="panel-heading"><a href="<?= base_url() ?>index.php/blog/post/<?= $post['post_id'] ?>"><h2><?= $post['post_title']; ?></h2></a></div>
                           <div class="panel-body">
                               <?= substr(strip_tags($post['post']), 0, 200) . '...'; ?>
                           </div>
                           <div class="panel-footer"><a href="<?= base_url() ?>index.php/blog/post/<?= $post['post_id'] ?>">En savoir plus</a>
                               <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'admin') { ?>
                                   |
                                   <a href="<?= base_url() ?>index.php/blog/editpost/<?= $post['post_id'] ?>"><span
                               class="glyphicon glyphicon-edit" title="Edit post"></span></a> |
                                   <a href="<?= base_url() ?>index.php/blog/deletepost/<?= $post['post_id'] ?>"><span style="color:#f77;"
                                                                                                class="glyphicon glyphicon-remove-circle"
                                                                                                title="Delete post"></span></a>

                                   <?php } ?>
                           </div>
                       </div>
           </div>
                       <?php
           } ?>
           <div class="col-lg-12"> <?= $pages ?></div>



   </div>
</div>