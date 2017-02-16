<div class="confirmation">
	<?php
	 echo $this->Form->create('Sighting', array('style' => 'margin:0px;', 'id' => 'PromptForm', 'url' => '/sightings/quickDelete/' . $id . '/' . $rawId . '/' . $context));
	?>
	<legend>Remove Sighting</legend>
	<div style="padding-left:5px;padding-right:5px;padding-bottom:5px;">
    <p>Remove sighting (<?php echo h($id); ?>)?</p>
		<table>
			<tr>
				<td style="vertical-align:top">
					<span id="PromptYesButton" class="btn btn-primary" onClick="removeSighting('<?php echo h($id); ?>', '<?php echo h($rawId); ?>', '<?php echo h($context); ?>');">Yes</span>
				</td>
				<td style="width:540px;">
				</td>
				<td style="vertical-align:top;">
					<span class="btn btn-inverse" id="PromptNoButton" onClick="cancelPrompt(1);">No</span>
				</td>
			</tr>
		</table>
	</div>
	<?php
		echo $this->Form->end();
	?>
</div>
