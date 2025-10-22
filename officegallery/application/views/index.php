<?php include('header.php');

$this->db->order_by('id', 'DESC');
$this->db->limit(15, 0);
$gallery = $this->db->get_where('gallery', array('status' => 1))->result();
?>

<div id="page_wrap" class="wall">
    <div class="gallery_isotope_container full_width" id="gallery-container">
        <?php foreach($gallery as $data): ?>
            <?php if($data->type == 1): ?>
                <div class="isotope_item travelling">
                    <div class="wall_j_item type_1">
                        <a href="<?=base_url("media/uploads/gallery/".$data->image)?>" class="fancybox wall_image photo" data-rel="gallery_wall">
                            <img class="item_image" src="<?=base_url("media/uploads/gallery/".$data->image)?>" alt="">
                        </a>
                    </div>
                </div>
            <?php elseif($data->type == 2): ?>
                <div class="isotope_item people">
                    <div class="wall_j_item type_3">
                        <a href="<?=$data->youtubelink?>" class="fancybox_media wall_image video" data-rel="gallery_wall">
                            <img class="item_image" src="<?=base_url("media/uploads/gallery/".$data->image)?>" alt="">
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    
</div>

<input type="hidden" id="offset" value="15">

<div style="text-align:center; margin:20px;">
    <button id="loadMore" class="btn btn-primary">Load More</button>
</div>

<div id="loading" style="text-align:center;display:none;">
    <p>Loading...</p>
</div>

<?php include('footer.php'); ?>

<script>
$(document).ready(function() {
    var loading = false;

    $('#loadMore').on('click', function() {
    if (loading) return;
    loading = true;
    $('#loading').show();

    var offset = parseInt($('#offset').val());

    $.ajax({
        url: "<?=base_url('welcome/load_more_gallery')?>",
        type: "POST",
        data: { offset: offset },
        success: function(response) {
            if ($.trim(response) != "") {

                // Convert HTML string to jQuery object
                var $newItems = $(response);

                // Append to Isotope container
                $('#gallery-container').append($newItems);

                // Tell Isotope about the new items
                $('#gallery-container').isotope('appended', $newItems);

                // Re-layout Isotope
                $('#gallery-container').isotope('layout');

                $('#offset').val(offset + 15);
                loading = false;
                $('#loading').hide();
            } else {
                $('#loading').hide();
                $('#loadMore').hide(); // hide button if no more items
            }
        }
    });
});

});
</script>

