<div class="step">
	<?=$this->lang->line('ffmpeg.1st')?>
</div>
<?=lang("upload.formats")?>: <em><?=str_replace("'"," ", $allowed)?></em><br/>
<?=lang("upload.max_size")?>: <?=$max/1024?> MB<br/>

	<div id="demo">
            <noscript>
                <?php echo form_open_multipart("/ffmpeg/val/server/php.php");?>

                <input type="file" name="qqfile"/>

                <p><?php echo form_submit('submit', lang('upload.file'));?></p>

                <?php echo form_close();?>
            </noscript>   
        </div>
<div class="step">
	<?=$this->lang->line('ffmpeg.1st2')?>
</div>

<?=youtube()?>

<ul id="separate-list"></ul>

<div id="bar_convert">
<div id="percents">
</div>
</div>

    <div id="converter2">


	<div class="step">
	<?=$this->lang->line('ffmpeg.2nd')?>
        </div>
	<div id="infoMessage"><?php echo $message;?></div>
	
        <?php echo form_open_multipart("converter/convert", $attr);?>	
	
	<?=$this->lang->line('ffmpeg.formats')?>:<br/>
	<select name="format" id="format">
            
	<?php foreach($formats as $format => $key): ?>
	<option value="<?=$format?>"><?=str_replace("-"," ",$format)?></option>
	<?php endforeach; ?>
        
	</select><br/>
        
        <?php
        /*
        <?=//$this->lang->line('ffmpeg.formats')?>:<br/>
	<select name="preset" id="preset">
            
	<?php //foreach($presets as $preset => $key): ?>
	<option value="<?=//$preset?>"><?=//$preset?></option>
	<?php //endforeach; ?>

	</select><br/>
        */
	?>

        <?=$this->lang->line('ffmpeg.cut')?><br/>
        <input type="checkbox" id="cut" name="cut" value="yes"/><br/>
        
        <div id="cut_field">
        <?=$this->lang->line('ffmpeg.start')?><br/>
        <input type="text" name="s_hh" id="s_hh" maxlength="2" size="2" value="00"/>
          : <input type="text" name="s_mm" id="s_mm" maxlength="2" size="2" value="00"/>
          : <input type="text" name="s_ss" id="s_ss" maxlength="2" size="2" value="00"/><br/>
        <?=$this->lang->line('ffmpeg.end')?><br/>

        <input type="text" name="e_hh" id="e_hh" maxlength="2" size="2" value="00"/>
          : <input type="text" name="e_mm" id="e_mm" maxlength="2" size="2" value="00"/>
          : <input type="text" name="e_ss" id="e_ss" maxlength="2" size="2" value="00"/><br/>
        </div>
        
        <?php
        /*
        //<?=$this->lang->line('ffmpeg.resize')?><br/>
        <input type="checkbox" id="resize" name="resize" value="yes"/><br/>
        
        <div id="resize_field">
        //<?=$this->lang->line('ffmpeg.width')?><br/>
        <input type="text" name="width" id="width" maxlength="4" size="4" value=""/><br/>
        //<?=$this->lang->line('ffmpeg.heigth')?><br/>
        <input type="text" name="heigth" id="heigth" maxlength="4" size="4" value=""/>
        </div>
        */
        ?>
        <?=$this->lang->line('ffmpeg.descr')?>:
        <br/>
        <input type="text" name="apraksts" id="apraksts"/>
        <br/> 

      <p><?php echo form_submit('submit', $this->lang->line('ffmpeg.saakt'));?></p>

    <?php echo form_close();?>

</div>

<div id="download"></div>