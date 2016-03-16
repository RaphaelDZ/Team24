<div id="site_content">
   
    <div id="content">
            <form action="<?=  base_url()?>blog/new_post/" method="post">
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'admin')
        { ?>
        <h2><a style="color: green" href="<?=  base_url()?>blog/new_post/"><span class="glyphicon glyphicon-pencil"></span> Create a new post</a></h2>
        <?php } ?>
    <!-- insert the page content here -->
    <?php foreach($posts as $post)
    { ?>
    <h2><a style="color:red;" href="<?=  base_url()?>blog/post/<?=$post['post_id']?>"><?=$post['post_title'];?></a></h2>
        <?php if($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'admin')
        { ?>
        <p>
            <a href="<?=  base_url()?>blog/editpost/<?=$post['post_id']?>"><span class="glyphicon glyphicon-edit" title="Edit post"></span></a> | 
            <a href="<?=  base_url()?>blog/deletepost/<?=$post['post_id']?>"><span style="color:#f77;" class="glyphicon glyphicon-remove-circle" title="Delete post"></span></a>
        </p>
       <?php }?>
        <p><?=  substr(strip_tags($post['post']), 0, 200).'...';?></p>
        <p><a href="<?=  base_url()?>blog/post/<?=$post['post_id']?>">En savoir plus</a></p>
    <?php
    }?>
    <?=$pages?>
    </div>
</div>