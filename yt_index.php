<?php
 	$rs = $db->findByPKDESCLimit21('vdo','user','user_user_id','user_id','vdo_id',6)->execute();
?>
<div class="row">
    <div class="col-12 mt-3"> 
        <h3>สื่อวีดีทัศน์</h3> 
    </div>
    <div class="col-12 mt-3 pb-3" style="border-bottom: 1px solid #5e5e5e;">
        <div class="row">
            <div class="col-12 mt-3"> 
                <h5>กรุ๊บ........</h5> 
            </div>
            <div class="col-12">
                <div class="row">
                    <?php  foreach($rs as $show){ ?>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php&id=<?php echo $show['vdo_id']; ?>"> <!-- VDO 1-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="https://img.youtube.com/vi/<?php echo $show['vdo_link']; ?>/0.jpg">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;"><?php echo $show['vdo_name']; ?></p>
                            </div>
                        </div>
                    </a>
                    <?php   } ?>
                </div>
            </div>
            <div class="col-12 mt-1"> 
                <a class="float-right" href="index.php?url=yt_index.php">ดูทั้งหมด...</a> 
            </div>
        </div>
    </div>
    <div class="col-12 mt-3">
        <div class="row">
            <div class="col-12 mt-3"> 
                <h5>กรุ๊บ....2....</h5> 
            </div>
            <div class="col-12">
                <div class="row">
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 1-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 2-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 3-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 4-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 5-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                    <a class="col-2" href="index.php?url=yt_play_vdo.php"> <!-- VDO 6-->
                        <div class="col-12">
                            <div class="row">
                                <!--<iframe width="100%" height="120" src="//www.youtube.com/embed/yVJc1O1U96c?rel=0" frameborder="0" allowfullscreen></iframe>-->
                                <img width="100%" height="120" src="images/no_pic.png">
                            </div>
                        </div>
                        <div class="col-12" style="">
                            <div class="row">
                                <p style="margin-bottom: 0px;white-space: nowrap;width: 200px;overflow: hidden;text-overflow: ellipsis;height:40px;line-height:50px;" title="สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown">สัตว์ทำยังไง?! สวนสัตว์ปิดเพราะโควิด 2019 | Zoo During Covid Lockdown</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 mt-1"> 
                <a class="float-right" href="index.php?url=yt_index.php">ดูทั้งหมด...</a> 
            </div>
        </div>
    </div>
</div>