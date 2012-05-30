<?php
$rumah_tangga = $this->session->userdata('rumah_tangga');
?>
<h2>Peralatan Rumah Tangga</h2>
<hr />
<form id="form-rumah-tangga" class="form-horizontal modalForm">

    <fieldset>

        <div class="control-group">
            <label class="control-label" for="input01">1. Mesin Cuci</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1" constanta-id="350" total-data="t-item-8" rel="counted" value="<?php echo element('item-8', $rumah_tangga, '') ?>" size="16" type="text" name="item-8"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-8" id="t-item-8" value="<?php echo element('t-item-8', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">2. Mesin Pengering</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1"  constanta-id="4000" total-data="t-item-9" rel="counted"   value="<?php echo element('item-9', $rumah_tangga, '') ?>"   size="16" type="text" name="item-9"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-9" id="t-item-9" value="<?php echo element('t-item-9', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input01">3. Setrika</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1"   constanta-id="500" total-data="t-item-10" rel="counted"  value="<?php echo element('item-10', $rumah_tangga, '') ?>"  size="16" type="text" name="item-10"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-10" id="t-item-10" value="<?php echo element('t-item-10', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">4. Kipas Angin</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1"  constanta-id="50" total-data="t-item-11" rel="counted"    value="<?php echo element('item-11', $rumah_tangga, '') ?>" size="16" type="text" name="item-11"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-11" id="t-item-11"  value="<?php echo element('t-item-11', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">5. AC (1 PK)</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1" constanta-id="750" total-data="t-item-12" rel="counted"   value="<?php echo element('item-12', $rumah_tangga, '') ?>"  size="16" type="text" name="item-12"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-12" id="t-item-12" value="<?php echo element('t-item-13', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="input01">6. Vacuum Cleaner</label>
            <div class="controls">
                <div class="input-append">
                    <input class="span1" constanta-id="1200"  total-data="t-item-13" rel="counted"    value="<?php echo element('item-13', $rumah_tangga, '') ?>" size="16" type="text"  name="item-13"><span class="add-on">jam</span>
                    <input type="hidden" name="t-item-13" id="t-item-13" value="<?php echo element('t-item-13', $rumah_tangga, '') ?>"/>
                </div>
            </div>
        </div>
        <input type="hidden" id="total_rumah_tangga" name="total_rumah_tangga" value="<?php echo element('total_rumah_tangga', $rumah_tangga, 0) ?>"/>

    </fieldset>
</form>


<div class="alert alert-info" style="text-align:right">
    <strong>Total Emisi Peralatan Dapur:</strong> <span class="" id="total_rumah_tangga_text"><?php echo element('total_rumah_tangga', $rumah_tangga) ?></span> gram CO<sub>2</sub>ek
</div>


<script type="text/javascript">
    $(document).ready(function(){
        
        var PROPINSI_CONS = '<?php echo get_koef_propinsi($user->propinsi_id) ?>';
        $("input[type=text]").change(function(){
            var val = parseInt($(this).val());
            var c = $(this).attr('constanta-id')
            var f = $(this).attr('total-data')
            var t = c*val*PROPINSI_CONS;
            $("#"+f).val(t)
            
            var i=8;
            var total=0;
            for (i=8;i<=13;i++){
                var val = parseInt($("#t-item-"+i).val()) || 0;
                total = total + val;
            }
            $("#total_rumah_tangga").val(total);
            $("#total_rumah_tangga_text").html(total);
        })
        
        
    });
</script>