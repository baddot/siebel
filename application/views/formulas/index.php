<?php

if(isset($id) && !empty($id))
{
	$this->load->view('formulas/editor');
}
else 
{
	//dev($prices);
	echo $this->bootstrap->heading(1, $this->siebel->getLang('formulas')); 
?>
	<div class="row">

		<div class="span12">

				<?= form_open(current_url(), array('class' => 'subnav')); ?>

					<ul class="nav nav-pills">
						<li class="span3"><a><?php echo ucfirst($this->siebel->getLang('name')); ?></a></li>
						<li class="span8"><a><?php echo ucfirst($this->siebel->getLang('formula')); ?></a></li>
						<li class="float-right align-right">
							<p>
								<span class="btn btn-small create href" data-href="<?php echo current_url() ?>/new"><i class="icon-plus"></i> <?php //echo $this->siebel->getLang('create') ?></span>
							</p>
						</li>

					</ul>

				</form>

		</div> <!-- End span12 -->

	</div> <!-- end row -->

	<div class="container list list-striped">

	<?php foreach($items as $item) { 
	?>
		<div class="row">
			<div class="span12">
				<div class="row">
					
					<div class="span3">
						<p><b><?php echo $item->formulaname ?></b><br /></p>
					</div>
					<div class="span8">
						<p><?php echo $this->siebel->formula_to_plain($item->formula) ?><br /></p>
					</div>
					<div class="align-right">
						<p>
							<a href="<?php echo current_url().'/'. $item->id; ?>" class="btn btn-small edit"><i class="icon-pencil"></i> <?php echo $this->siebel->getLang('edit') ?></a>
						</p>
					</div>
					
				</div>
			</div>
		</div>

	<?php } ?>
	</div>
<?php } ?>