
<h3><?php echo $this->generateLabel(); echo $this->xlabel; ?> <span style='background: #727272; padding: 2px 4px; margin-left: 5px; color: #fff; border-radius: 4px; font-weight:normal; font-size:80%;' id='latlng_<?php echo $this->strId; ?>'>(<?php echo $this->varValue; ?>)</span></h3>
<?php echo $this->generate(); ?>
<div id="<?php echo $this->strId; ?>_map_canvas" style="width=686px; height: 250px; margin: 10px 0; border: 1px solid #ccc"></div>
<script type="text/javascript">

    window.addEvent('load', function () {
        var <?php echo $this->strId; ?>_latlng = new google.maps.LatLng(<?php echo (!$this->varValue) ? '47.8064766491484, 16.36959360700223' : $this->varValue ; ?>);
        var <?php echo $this->strId; ?>_options = {
            zoom:16,
            center:<?php echo $this->strId; ?>_latlng,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var <?php echo $this->strId; ?>_map = new google.maps.Map(document.getElementById("<?php echo $this->strId; ?>_map_canvas"),
                <?php echo $this->strId; ?>_options);

        var <?php echo $this->strId; ?>_marker = new google.maps.Marker({
            position:<?php echo $this->strId; ?>_latlng,
            draggable:true,
            map:<?php echo $this->strId; ?>_map,
            title:""
        });

        google.maps.event.addListener(<?php echo $this->strId; ?>_marker, 'dragend', function(){

            var value = <?php echo $this->strId; ?>_marker.getPosition().toString();
            value = value.slice(1, value.length-1);
            $('ctrl_<?php echo $this->strId; ?>').set('value', value);
            $('latlng_<?php echo $this->strId; ?>').set('text', '('+ $('ctrl_<?php echo $this->strId; ?>').get('value') +") ");
            $('latlng_<?php echo $this->strId; ?>').setStyle('background', '#d7321b');
        });

    });


</script>
