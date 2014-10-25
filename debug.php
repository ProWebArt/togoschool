<div class="row">
    <div class="col-sm-4">
        <h3>Serveur</h3>
        <?php var_dump($_SERVER); ?>
    </div>
    <div class="col-sm-4">
        <h3>Constants</h3>
        <?php var_dump(get_defined_constants()); ?>
    </div>
    <div class="col-sm-4">
        <h3>Sessions</h3>
        <?php var_dump($_SESSION); ?>
    </div>
</div>