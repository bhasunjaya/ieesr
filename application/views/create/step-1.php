<?php
$session_penerangan = $this->session->userdata('penerangan');
$i = 0;
$default = array();
if (isset($session_penerangan['item'])):
    foreach ($session_penerangan['item'] as $r):
        $default[$i]['tipe'] = $r['tipe'];
        $default[$i]['daya'] = $r['daya'];
        $default[$i]['waktu'] = $r['waktu'];
        $i++;
    endforeach;
endif;

$tipes = array('LED', 'Neon - CFL', 'Bohlam - Lampu Pijar');
?>

<div style="float: right;margin-top:-10px;">
    <img src="<?php echo $themes ?>img/Fluorescent.png" width="64" height="64" />
</div>
<h3>Penerangan</h3>
<p>Isi jenis, daya dan lama waktu setiap lampu yang digunakan. Untuk menambah jumlah lampu, klik "Tambah Lampu"</p>

<form id="listrik" class="form-horizontal">
    <fieldset>
        <div id="group-input" class="control-group">
            <?php for ($i = 0; $i < 10; $i++): ?>
                <?php if (isset($default[$i])): ?>

                    <div id="input-<?php echo $i ?>" class="controls clonedInput">
                        <div class="input-append">
                            <select name="items-<?php echo $i ?>-tipe" class="span1 detector">
                                <?php foreach ($tipes as $r): ?>
                                    <option <?php echo $r == $default[$i]['tipe'] ? 'selected="selected"' : '' ?>><?php echo $r ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-append">
                            <input class="span1 detector" id="items-<?php echo $i ?>-daya" name="items-<?php echo $i ?>-daya" size="16" type="text" value="<?php echo $default[$i]['daya'] ?>"><span class="add-on">watt</span>
                        </div>
                        <div class="input-append">
                            <input class="span1 detector" id="items-<?php echo $i ?>-waktu" name="items-<?php echo $i ?>-waktu" size="16" type="text" value="<?php echo $default[$i]['waktu'] ?>"><span class="add-on">Jam</span>
                        </div>
                        <a href="#" class="iconbtnDel" rel="input-<?php echo $i ?>"><i class="icon-remove iconbtnDel"  rel="input-<?php echo $i ?>" data-item="<?php echo $i ?>"></i></a>
                    </div>

                <?php else: ?>

                    <div id="input-<?php echo $i ?>" class="controls clonedInput <?php echo $i ? 'hide' : '' ?>">
                        <div class="input-append">
                            <select name="items-<?php echo $i ?>-tipe" class="span1 detector">
                                <option>LED</option>
                                <option>Neon - CFL</option>
                                <option>Bohlam - Lampu Pijar</option>
                            </select>
                        </div>
                        <div class="input-append">
                            <input class="span1 detector" id="items-<?php echo $i ?>-daya" name="items-<?php echo $i ?>-daya" size="16" type="text" value="<?php echo $i ?>"><span class="add-on">watt</span>
                        </div>
                        <div class="input-append">
                            <input class="span1 detector" id="items-<?php echo $i ?>-waktu" name="items-<?php echo $i ?>-waktu" size="16" type="text"><span class="add-on">Jam</span>
                        </div>
                        <a href="#" class="iconbtnDel" rel="input-<?php echo $i ?>"><i class="icon-remove iconbtnDel"  rel="input-<?php echo $i ?>" data-item="<?php echo $i ?>"></i></a>
                    </div>

                <?php endif; ?>
            <?php endfor; ?>
        </div>
        <input type="button" style="float:right" class="btn btn-mini btn-primary" id="btnAdd" value="Tambah" />
        <input type="hidden" name="total" id="frm_total" value="<?php echo isset($session_penerangan['total']) ? $session_penerangan['total'] : 0; ?>" />
    </fieldset>
</form>
<div class="alert alert-info">
    <strong>Total Emisi Penerangan:</strong> <span class="" id="total_all"><?php echo isset($session_penerangan['total']) ? $session_penerangan['total'] : 0; ?></span> gram CO<sub>2</sub>ek
</div>
Penjelasan tentang Lampu:
<p><img src="<?php echo $themes ?>img/lampu.png" width="200"></p>



<script type="text/javascript">
    $(document).ready(function(){
        
        $('#btnAdd').click(function() {
            var id_terlihat = $('.clonedInput:visible').size();
            if(id_terlihat > 9)
                $('#btnAdd').attr('disabled','disabled');
            
            for(i=0;i<10;i++)
            {
                var e = $("#input-"+i);
                if(e.is(":visible")){
                }else{
                    e.show('fast').effect("highlight", {}, 3000);
                    return;
                }
            }
        });
        $('.icon-remove').click(function() {
            var rel = $(this).attr('rel');
            var item = $(this).attr('data-item');
            $("#items-"+item+'-daya').val('');
            $("#items-"+item+'-waktu').val('');
            
            
            
            $('#'+rel).hide('slow');
            $('#btnAdd').removeAttr('disabled');
           
            recount();
            return false;
        });
        
        
        $(".detector").change(recount);
        
        function recount(){
            
            var total = 0;
            for(i=0;i<10;i++)
            {
                var e = $("#input-"+i);
                if(e.is(":visible")){
                    var daya = $("#items-"+i+'-daya').val();
                    var waktu = $("#items-"+i+'-waktu').val();
                    var total_item = waktu*daya;
                    if(isNaN(total_item)){
                        total_item = 0;
                    }else{
                        total_item 
                    }
                    total = total+  total_item;
                }
            }
            $("#total_all").html(total);
            $("#frm_total").val(total);
        }
        
        

    })
</script>