<div class="container">
<form class="form-horizontal">
<?php //echo form_open('welcome/change', ['class'=>'form-horizontal']); ?> 
<form>
  <fieldset>
  <legend> Update Post</legend>

    <div class="form-group row"></div>
    <div class="form-group">
      <label class="col-md-2 control-label">Title</label>
      <div class="col-md-5">
     
      <?php echo form_input(['name'=>'title', 'placeholder'=>'Title', 'class'=>'form-control', 'value'=>set_value('title',$post->title)]);?>
      </div>
      <div class="col-md-5">
      <?php echo form_error('title', '<div class="text="danger">', '</div>');?>
    </div>

    <div class="form-group">
      <label for="textArea" class="col-md-2 control-label">Description</label>
      <div class="col-md-5">
    
      <?php echo form_textarea(['name'=>'description', 'placeholder'=>'Description', 'class'=>'form-control',
      'value'=>set_value('description',$post->description)]);?>
      </div>

      <div class="col-md-5">
      <?php echo form_error('description', '<div class="text-danger">', '</div>');?>
      </div>
   </div>
    <br>
<div class="form-group">
<div class="col-md-10 col-md-offset-2">
    <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn-primary']); ?>
    <?php echo anchor('welcome', 'Back', ['class'=>'btn btn-warning']);?>
        </div>
    </div>
  </fieldset>
<?php echo form_close(); ?>
</div>