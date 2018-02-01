<?php

$global_title  = "Michelle Miller";
$global_meta = '<meta charset="utf-8">
  <meta name="description" content="Michelle Miller: Software Engineer" />
  <meta name="keywords" content="embedded, computer, engineer, firmware, software, engineering, stout">';
$global_css  = '<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
  <link rel="stylesheet" href="resources/css/reset.css" />
  <link rel="stylesheet" href="resources/css/style.css" />';

$global_header = '<header>
  <section id="title">
    <h1>Michelle Miller</h1>
    <p id="tagline">Computer Engineering Student</p>
  </section>
  <section>
    <nav>
      <a href="http://michellemiller.online/index.php">About</a>
      <a href="http://michellemiller.online/resources/pdf/resume_mmiller.pdf" target="_blank">Resume</a>
      <a href="http://michellemiller.online/portfolio.php">Portfolio</a>
      <a href="http://blog.michellemiller.online/">Blog</a>
    </nav>
  </section>
</header>';
$global_footer = '</main>
<footer>
	<section>
		<nav id="social">
			<h2>Find me on:</h2>
			<a href="https://github.com/chellimiller/">GitHub</a>
			<a href="https://www.linkedin.com/in/chellicmiller/">LinkedIn</a>
			<a href="https://codefights.com/profile/chelli_m">CodeFights</a>
			<a href="https://www.instructables.com/member/chellicmiller/">Instructables</a>
		</nav>
	</section>
	<section>
		<a href="http://www.noahjmiller.com/">Photography by<br />Noah J Miller</a>
	</section>
</footer>
</body>
</html>';


function layout_head($t="") {
	
	if ($t == "") {
		$t = $GLOBALS['global_title'] . ": Software Engineer";
	} else {
		$t = $GLOBALS['global_title'] . ": " . $t;
	}
	
	$head = '
		<head>
			<meta charset="utf-8">
			<title>' . $t . '</title>
			' . $GLOBALS['global_meta'] . '
			' . $GLOBALS['global_css'] . '
		</head>';
		
	return $head;

} function layout_body($output) {
	
	return '<body>
			' . $GLOBALS['global_header'] . '
			<main>' . $output . '</main>
			' . $GLOBALS['global_footer'] . '
		</body>';;

}

// Generates entire layout
function generate_layout($output, $title="") {
	echo '<!doctype html><html>' . layout_head($title) . layout_body($output) . '</html>';
}

?>
