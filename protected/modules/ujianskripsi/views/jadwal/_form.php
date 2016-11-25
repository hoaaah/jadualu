<style type="text/css">
.jumbotron{margin:5px 0px;border-radius: 5px !important;border: 1px solid #ddd;}
.mahasiswa{padding:15px 15px 15px 15px !important;background-color: #f4f4f4}
.dosen{padding:5px 15px 15px 15px !important;background-color: #e4f4f4}
.form-group {margin-bottom: 5px;

</style>

  <div class="container-fluid">
	  <div class="col-md-12">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'jujian-skripsi-form',
			// Please note: When you enable ajax validation, make sure the corresponding
			// controller action is handling ajax validation correctly.
			// There is a call to performAjaxValidation() commented in generated controller code.
			// See class documentation of CActiveForm for details on this.
			'enableAjaxValidation'=>false,
		    'htmlOptions'=>array(
		        'class'=>'form-horizontal',
		    ),			
		)); ?>
			<?php echo $form->errorSummary($model, $penguji1, $penguji2, $penguji3); ?>	  

	      <h3>Ubah Data</h3>
	          <div class="jumbotron mahasiswa" style="text-align:center">
	          <!-- Isian Data Mahasiswa -->
	          <h4>ISIAN MAHASISWA</h4>
	          <?php IF($model->isNewRecord): ?>
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'periode_id',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($model, 'periode_id', CHtml::listData(Jperiode::model()->findAll(), 'id', 'periode'),['class' => 'form-control', 'empty' => 'Periode', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($model,'periode_id'); ?>
	            </div>
	          </div>
	          <?php /*
				<div class="row">
					<?php echo $form->labelEx($model,'skripsi_id'); ?>
					<?php echo $form->textField($model,'skripsi_id'); ?>
					<?php echo $form->error($model,'skripsi_id'); ?>
				</div>
				*/
				?>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'mahasiswa_id',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php
					$sql='SELECT CONCAT(a.mahasiswa_id,".",a.id) AS id, CONCAT (b.npm, " - ",b.nama, " - ",a.judul) AS name FROM jskripsi a INNER JOIN ref_mahasiswa b ON a.mahasiswa_id = b.id ORDER BY b.npm ASC';
					$connection=Yii::app()->db;
					$command=$connection->createCommand($sql);
					$results=$command->queryAll(); 	              
	              echo CHtml::activeDropDownList($model, 'kodemahasiswa', CHtml::listData($results, 'id', 'name'),['class' => 'form-control', 'empty' => 'NPM', 'placeholder' => 'Periode']);
	              ?>
				  <?php echo $form->error($model,'mahasiswa_id'); ?>
	            </div>
	          </div>	   
	          <?php endif;?>       
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'tanggal_ujian',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($model, 'tanggal_ujian', CHtml::listData(JtanggalUjian::model()->findAll(), 'id', 'tanggal'),['class' => 'form-control', 'empty' => 'Tanggal', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($model,'tanggal_ujian'); ?>
	            </div>
	          </div>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'waktu_ujian',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($model, 'waktu_ujian', CHtml::listData(Jsession::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Waktu', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($model,'waktu_ujian'); ?>
	            </div>
	          </div>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'lokasi_ujian',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($model, 'lokasi_ujian', CHtml::listData(JlokasiUjian::model()->findAll(), 'id', 'ruang.kelas'),['class' => 'form-control', 'empty' => 'Lokasi', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($model,'lokasi_ujian'); ?>
	            </div>
	          </div>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'kelulusan',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo $form->textField($model,'kelulusan',['class' => 'form-control', 'placeholder' => 'Kelulusan']); ?>
				  <?php echo $form->error($model,'kelulusan'); ?>
	            </div>
	          </div>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'nilai_ujian_skripsi',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo $form->textField($model,'nilai_ujian_skripsi',['class' => 'form-control', 'placeholder' => 'Nilai']); ?>
				  <?php echo $form->error($model,'nilai_ujian_skripsi'); ?>
	            </div>
	          </div>	          
	          <div class="form-group">
	            <?php echo $form->labelEx($model,'nilai_ujian_kompre',['class' => 'col-sm-2 control-label']); ?>
	            <div class="col-sm-10">
	              <?php echo $form->textField($model,'nilai_ujian_kompre',['class' => 'form-control', 'placeholder' => 'Nilai']); ?>
				  <?php echo $form->error($model,'nilai_ujian_kompre'); ?>
	            </div>
	          </div>
	          </div>


	          <!-- Isian Dosen Penguji Pembimbing -->
	          <div class="jumbotron dosen" style="text-align:center">
	          <h4>ISIAN DOSEN</h4>
	          <div class="form-group">
	            <label for="ketua_penguji" class="col-sm-2 control-label">Ketua Penguji:</label>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($penguji1, '[1]dosen_id', CHtml::listData(Dosen::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Ketua Penguji', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($penguji1,'dosen_id'); ?>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="anggota_1" class="col-sm-2 control-label">Anggota Penguji 1:</label>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($penguji2, '[2]dosen_id', CHtml::listData(Dosen::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Ketua Penguji', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($penguji2,'dosen_id'); ?>
	            </div>
	          </div>
	          <div class="form-group">
	            <label for="anggota_2" class="col-sm-2 control-label">Anggota Penguji 2:</label>
	            <div class="col-sm-10">
	              <?php echo CHtml::activeDropDownList($penguji3, '[3]dosen_id', CHtml::listData(Dosen::model()->findAll(), 'id', 'name'),['class' => 'form-control', 'empty' => 'Ketua Penguji', 'placeholder' => 'Periode']);?>
				  <?php echo $form->error($penguji3,'dosen_id'); ?>
	            </div>
	          </div>
	          </div>

			<?php /*echo CHtml::submitButton($model->isNewRecord ? '<i class="glyphicon glyphicon-log-in"></i> Simpan' : 'Ubah', ['class' =>'btn btn-warning pull-right']); */
			echo CHtml::tag('button', array(
				        'name'=>'btnSubmit',
				        'type'=>'submit',
				        'class' => 'btn btn-warning pull-right',
				      ), '<i class="glyphicon glyphicon-log-in"></i> Save'); ?>      
	        <button class="btn btn-info pull-right" value="kembali" type="submit" name="kembali"><< Kembali</button>		
	      
		<?php $this->endWidget(); ?>

	  </div>
  </div>
