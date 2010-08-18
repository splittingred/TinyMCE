<script type="text/javascript">
// <[CDATA[
Ext.onReady(function() {
    Tiny.config = <?php echo $this->modx->toJSON($this->properties); ?>;
    Tiny.config.setup = function(ed) { 
        ed.onInit.add(Tiny.onLoad);
        ed.onKeyUp.add(Tiny.onChange);
    };
    Tiny.templates = <?php echo $this->modx->toJSON($templates); ?>;
});
// ]]>
</script>