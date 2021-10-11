<?php
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
$stringa = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex quibusdam velit quo non quos unde quod. Incidunt enim hic cum magni vitae aliquid libero aliquam tenetur. Labore, facilis illum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex quibusdam velit quo non quos unde quod. Incidunt enim hic cum magni vitae aliquid libero aliquam tenetur. Labore, facilis illum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta ex quibusdam velit quo non quos unde quod. Incidunt enim hic cum magni vitae aliquid libero aliquam tenetur. Labore, facilis illum";

var_dump(explode( '.', $stringa));
?>