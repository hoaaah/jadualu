            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php IF($this->uniqueid == 'site') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-fw fa-dashboard"></i> Dashboard',array('/')); ?>
                    </li>
                    
                    <?php IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2):?>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#akademik" ><i class="fa fa-fw fa-file"></i> Setup <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="akademik" class="collapse">
                            <li>
                                <?php echo CHtml::link('Bidang Skripsi',array('/puus')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Mata Kuliah',array('/MataKuliah/')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Data Mahasiswa',array('/mahasiswa/')); ?>
                            </li>                            
                        </ul>
                    </li>
                    <li <?php IF($this->uniqueid == 'user') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-user"></i>  User',array('/user/')); ?>
                    </li>                     
                    <?php ENDIF;?>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ujian"><i class="fa fa-fw fa-wrench"></i> Ujian Skripsi <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ujian" class="collapse">
                            <?php IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2 ):?> 
                            <li>
                                <?php echo CHtml::link('Ref Periode',array('/ujianskripsi/periode/')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Ref Lokasi',array('/ujianskripsi/lokasi/')); ?>
                            </li>                            
                            <li>
                                <?php echo CHtml::link('Ref Tanggal Ujian',array('/ujianskripsi/tanggal/')); ?>
                            </li>
                            <li>
                                <?php echo CHtml::link('Manage Skripsi',array('/ujianskripsi/skripsi/')); ?>
                            </li>                            
                            <li>
                                <?php echo CHtml::link('Manage Jadwal Ujian',array('/ujianskripsi/jadwal/')); ?>
                            </li>
                            <?php ENDIF;?>

                            <?php IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2 || $this->user_log['bidang_id'] == 4):?> 
                            <li>
                                <?php echo CHtml::link('Jadwal Mahasiswa',array('/ujianskripsi/ujian/')); ?>
                            </li> 
                            <?php ENDIF;?>
                            <?php IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2 || $this->user_log['bidang_id'] == 3):?> 
                            <li>
                                <?php echo CHtml::link('Jadwal Dosen',array('/ujianskripsi/dosen/')); ?>
                            </li>
                            <?php ENDIF;?>
                            <li>
                                <?php echo CHtml::link('Jadwal Ujian',array('/ujianskripsi/cetak/')); ?>
                            </li>
                        </ul>
                    </li>         

                    <?php IF ($this->user_log['bidang_id'] == 1 || $this->user_log['bidang_id'] == 2):?>           
                    <li <?php IF($this->uniqueid == 'dosen') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-user"></i>  Dosen Pembimbing',array('/dosen/')); ?>
                    </li>    
                    <li <?php IF($this->uniqueid == 'notification') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-fw fa-file"></i> Blogroll',array('/notification/')); ?>
                    </li>   
                    <li <?php IF($this->uniqueid == 'Materi Kuliah') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-fw fa-file"></i> File Management',array('/tfiles/')); ?>
                    </li> 
                    <li <?php IF($this->uniqueid == 'user') echo 'class="active"'?>>
                        <?php echo CHtml::link('<i class="fa fa-user"></i>  Ubah Password',array('/user/ubahpwd', 'id' => Yii::app()->user->Id)); ?>
                    </li>                     
                    <?php ENDIF;?>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#operasi"><i class="fa fa-fw fa-wrench"></i> Operasi Laman Ini<i class="fa fa-fw fa-caret-down"></i></a>
						<?php
						$this->widget('zii.widgets.CMenu', array(
						  'items'=>$this->menu,
						  'htmlOptions'=>array('class'=>'collapse', 'id' => 'operasi'),
						));
						?>			
                    </li>	
                    
                    <li>
                        <?php echo CHtml::link('<i class="fa fa-fw fa-desktop"></i> Logout',array('/site/logout')); ?>
                    </li>					
                </ul>
            </div>		
            <!-- /.navbar-collapse -->
        </nav>
