<?php 
    global $securedam_internal_policy_form_sections;
?>

<style>
    <?php include plugin_dir_path( __FILE__ ) . 'assets/style.css'; ?>

    .hideClass {
        display: none;
    }
    .checked {
        color: #ff0000 !important;
        float: left;
        margin-right: 8px;
    }
</style>
<script>
    <?php include plugin_dir_path( __FILE__ ) . 'assets/util.js'; ?>

    window.addEventListener('load', function(e) {
        document.getElementsByClassName('tablinks')[0].click();
    });
</script>

<div class="tab">
    <? foreach ($securedam_internal_policy_form_sections as $tab) { ?>
        <button class="tablinks" onclick="openSection(event, '<?php echo $tab['slug']; ?>')">
            <small id="<?php echo $tab['slug']; ?>-checked" class="hideClass checked">&#x2714;</small>
            <?php echo $tab['title']; ?>
        </button>
    <?php } ?>
</div>
<? foreach ($securedam_internal_policy_form_sections as $tab) { ?>
    <div id="<?php echo $tab['slug']; ?>" class="tabcontent">
        <h2><?php echo $tab['title']; ?></h2>
        <p><?php echo $tab['description']; ?></p>
        <br/>
        <p><b><?php echo $tab['question']; ?></b></p>
        <div>
            <button id="<?php echo $tab['slug']; ?>-yes" onclick='javascript:registerOption("<?php echo $tab['slug']; ?>", "yes");'><?php echo $tab['answers']['yes']; ?></button><br/>
            <button id="<?php echo $tab['slug']; ?>-no" class="hideClass" onclick='javascript:registerOption("<?php echo $tab['slug']; ?>", "no");'><?php echo $tab['answers']['no']; ?></button><br/>
        </div>
        <br/>
        <hr/>
        <div>
            <?php include plugin_dir_path( __FILE__ ) . "cross-selling/" . $tab['cross-selling']; ?>
        </div>
    </div>
<?php } ?>

<br/>
<br/>
<div>
    <center>
        <button onclick='generatePlan("<?php echo dirname(plugin_dir_url( __FILE__ )) . "/generate.php"; ?>");'>Generate Plan</button>
    </center>
</div>