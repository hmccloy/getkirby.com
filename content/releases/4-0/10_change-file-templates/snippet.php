<style>
.v4-file-template-columns {
	display: grid;
	gap: var(--spacing-6);
	grid-template-columns: 1fr;
	grid-template-areas:
		"view"
		"teaser"
}

@media screen and (min-width: 60rem) {
	.v4-file-template-columns {
		grid-template-columns: 1fr 3fr;
		grid-template-areas:
			"teaser view"
		;
	}
}
</style>

<div class="v4-file-template-columns">
	<figure class="release-box bg-light" style="grid-area: view">
		<?= $section->image('change-template.png') ?>
	</figure>
	<div class="release-text-box" style="grid-area: teaser">
		<?php snippet('templates/release-40/teaser', ['section' => $section]) ?>
	</div>
</div>
