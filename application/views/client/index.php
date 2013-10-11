<h1></h1>

<div class="alert alert-block alert-danger fade in" style="display:none">
	<button type="button" class="close">×</button>
	<h4>Oh snap! You got an error!</h4>
	<p>Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</p>
</div>

<div class="well play-well text-center clearfix">

	<?php for ($x = 1; $x <= 42; $x++) { ?>
		<a href="javascript:void(0)" id="<?php echo $x; ?>" class="btn btn-lg col-xs-3 col-sm-2 col-md-1 btn-default show-grid btn-play"><strong><?php echo $x; ?></strong></a>
	<?php } ?>

</div>

<?php echo form_open('/play/save', array("class" => "form-horizontal")); ?>

	<?php echo form_hidden('Bets', 'sdfsdf'); ?>

	<div class="control-group">

		<div class="controls">
		
			<?php echo form_submit(array("id" => "submit", "name" => "submit", "class" => "btn btn-primary"), 'Save'); ?>
		
		</div>

	</div>


<?php echo form_close();?>

<div class="row">
asdfasdf
</div>