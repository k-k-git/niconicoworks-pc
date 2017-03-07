<?php if( is_singular("column") ): ?>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php elseif( is_page( '34' ) || is_page( '321' ) || is_category() || is_tag() || is_search() || is_single() ): ?>
<body>
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<?php elseif( is_archive( "column" ) || is_page() ): ?>
<body class="page">
<p id="page-top"><a href="#top">PAGE TOP</a></p>
<div id="wrapper">
<?php elseif(is_home()): ?>
<body class="top">
<div id="top_wrapper">
<?php endif; ?>
