    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header alert" id="modelHeader">
                    <h4 id="modalTitle" class="modal-title" ></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -15px;"><span aria-hidden="true">&times;</span></button>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <?php
					$rs = $db->findByPK('conferroom','conferroom_id',$id)->executeAssoc();
					if($rs['zoo_zoo_id']== 3 || $rs['zoo_zoo_id']== 15){
				?>
                	<div class="modal-footer" id="modalFooter"></div>
                <?php
	            	}
                ?>
            </div>
        </div>
    </div>
