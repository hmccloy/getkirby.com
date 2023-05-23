<style>
.v4-color-columns {
	--columns: 1;
}

@media screen and (min-width: 50rem) {
	.v4-color-columns {
		--columns: 2;
	}
	.v4-color-code {
		grid-column: 2;
	}
	.v4-color-modes {
		grid-row: 2;
		grid-column: 1;
	}
}

@media screen and (min-width: 80rem) {
	.v4-color-columns {
		--columns: 3;
	}
	.v4-color-code {
		grid-column: 1;
	}
	.v4-color-hero {
		grid-column: span 2;
		grid-row: span 3;
	}
}

</style>

<div class="v4-color-columns columns">
	<div class="release-text-box">
		<?php snippet('templates/release-40/teaser', ['section' => $section]) ?>
	</div>
	<figure class="v4-color-hero release-padded-box bg-light grid place-items-center">
		<?= $section->image('color-field-names.png') ?>
	</figure>
	<figure class="v4-color-code release-code-box text-lg">
		<?= $section->example()->kt() ?>
	</figure>
	<figure class="v4-color-modes release-box bg-light flex-grow grid place-items-center p-6">
		<?= $section->image('color-field-modes.png') ?>
	</figure>
</div>
