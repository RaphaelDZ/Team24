
<br/>
<div id="site_content">

    <div id="content">
        <form action="<?= base_url() ?>blog/new_post/" method="post">
            <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') != 'user') { ?>
                <h2><a style="color: green" href="<?= base_url() ?>blog/new_post/"><span
                            class="glyphicon glyphicon-pencil"></span> Create a new post</a></h2>
            <?php } ?>

            <div class="header-search hidden-xs">
                <form id="searchForm" action="page-search-results.html" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" placeholder="Rechercher" required>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="fa fa-search">OK</i></button>
                    </span>
                    </div>
                </form>
            </div>
            <?php
            if($this->input->post('checkbox1') == 'on')
                $query->andWhere('champ1 = valeur1');
            if($this->input->post('checkbox2') == 'on')
                $query->andWhere('champ2 = valeur2');
            if($this->input->post('checkbox3') == 'on')
                $query->andWhere('champ3 = valeur3');
            ?>

            <div align="center">
            <!-- insert the page content here -->
            <?php foreach ($posts as $post) { ?>
                <h2><a style="color:red;"
                       href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>"><?= $post['post_title']; ?></a></h2>
                <?php if ($this->session->userdata('user_id') && $this->session->userdata('user_type') == 'admin') { ?>
                    <p>
                        <a href="<?= base_url() ?>blog/editpost/<?= $post['post_id'] ?>"><span
                                class="glyphicon glyphicon-edit" title="Edit post"></span></a> |
                        <a href="<?= base_url() ?>blog/deletepost/<?= $post['post_id'] ?>"><span style="color:#f77;"
                                                                                                 class="glyphicon glyphicon-remove-circle"
                                                                                                 title="Delete post"></span></a>
                    </p>
                <?php } ?>
                <p><?= substr(strip_tags($post['post']), 0, 200) . '...'; ?></p>
                <p><a href="<?= base_url() ?>blog/post/<?= $post['post_id'] ?>">En savoir plus</a></p>
                <?php
            } ?>
            <?= $pages ?>
            </div>
    </div>
</div>
