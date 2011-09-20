<script type="text/javascript">
//<![CDATA[
Tiny.config = <?php echo $this->modx->toJSON($this->properties); ?>;
Tiny.config.setup = function(ed) {
    ed.onInit.add(Tiny.onLoad);
    ed.onKeyUp.add(Tiny.onChange);
    ed.onChange.add(Tiny.onChange);
};
Tiny.templates = <?php echo $this->modx->toJSON($templates); ?>;

Ext.onReady(function() {
<?php if (!$richtextResource) echo 'MODx.on("ready",function() { MODx.loadRTE(); });'; ?>
});
//]]>
</script>