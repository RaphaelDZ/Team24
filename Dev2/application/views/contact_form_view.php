
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
            echo form_open("contactform/index", $attributes);?>
            <fieldset>
            <legend>Contactez-nous</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="name" class="control-label">Nom</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Votre nom complet" type="text"  />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">E-mail</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Votre adresse e-mail" type="text"  />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Sujet</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" type="text"  />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Votre message"></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>
</body>
</html>