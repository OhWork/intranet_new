<?php 
            $id = $_GET['id'];
            $rs = $db->findByPK22('vdo','user','user_user_id','user_id','vdo_id',$id)->executeAssoc();
?>
<div class="row">
    <div class="col-12 mt-5"> 
        <h3><?php echo $rs['vdo_name']; ?></h3> 
    </div>
    <div class="col-12 mt-5 mb-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <iframe width="100%" height="400" src="//www.youtube.com/embed/<?php echo $rs['vdo_link']; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-3"></div>
        </div>
    </div>   
</div>