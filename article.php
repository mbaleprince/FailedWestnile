<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Article | HTML Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include_once 'include/header.php'?>

<main>
	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<article>
						<img loading="lazy" decoding="async" src="images/post/post-4.jpg" alt="Post Thumbnail" class="w-100">
						<ul class="post-meta mb-2 mt-4">
							<li>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;margin-top:-4px" class="text-dark" viewBox="0 0 16 16">
									<path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
									<path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
									<path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
								</svg> <span>29 May, 2021</span>
							</li>
						</ul>
						<h1 class="my-3">Top 7 Reasons to Visit Denver this Summer</h1>
						<ul class="post-meta mb-4">
							<li> <a href="/categories/destination">destination</a>
							</li>
						</ul>
						<div class="content text-left">
							<h1 id="heading">Heading</h1>
							<p>Here is example of hedings. You can use this heading by following markdownify rules. For example: use <code>#</code> for heading 1 and use <code>######</code> for heading 6.</p>
							<h2 id="emphasis">Emphasis</h2>
							<p>Emphasis, aka italics, with <em>asterisks</em> or <em>underscores</em>.</p>
							<p>Strong emphasis, aka bold, with <strong>asterisks</strong> or <strong>underscores</strong>.</p>
							<p>Combined emphasis with <strong>asterisks and <em>underscores</em></strong>.</p>
							<p>Strikethrough uses two tildes. <del>Scratch this.</del>
							</p>
							<!-- table of content -->
							<h2 id="link">Link</h2>
							<p><a href="#!">I&rsquo;m an inline-style link</a>
							</p>
							<p><a href="#!" title="Google's Homepage">I&rsquo;m an inline-style link with title</a>
							</p>
							<p><a href="https://www.themefisher.com">I&rsquo;m a reference-style link</a>
							</p>
							<p><a href="#!">I&rsquo;m a relative reference to a repository file</a>
							</p>
							<p><a href="https://gethugothemes.com">You can use numbers for reference-style link definitions</a>
							</p>
							<p>Or leave it empty and use the <a href="https://www.getjekyllthemes.com">link text itself</a>.</p>
							<p>URLs and URLs in angle brackets will automatically get turned into links.
<a href="http://www.example.com">http://www.example.com</a> or <a href="http://www.example.com">http://www.example.com</a> and sometimes example.com (but not on Github, for example).</p>
							<p>Some text to show that the reference links can follow later.</p>
							<hr>
							<h2 id="paragraph">Paragraph</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam nihil enim maxime corporis cumque totam aliquid nam sint inventore optio modi neque laborum officiis necessitatibus, facilis placeat pariatur! Voluptatem, sed harum pariatur adipisci voluptates voluptatum cumque, porro sint minima similique magni perferendis fuga! Optio vel ipsum excepturi tempore reiciendis id quidem? Vel in, doloribus debitis nesciunt fugit sequi magnam accusantium modi neque quis, vitae velit, pariatur harum autem a! Velit impedit atque maiores animi possimus asperiores natus repellendus excepturi sint architecto eligendi non, omnis nihil. Facilis, doloremque illum. Fugit optio laborum minus debitis natus illo perspiciatis corporis voluptatum rerum laboriosam.</p>
							<hr>
							<h2 id="ordered-list">Ordered List</h2>
							<ol>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
							</ol>
							<hr>
							<h2 id="unordered-list">Unordered List</h2>
							<ul>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
								<li>List item</li>
							</ul>
							<hr>
							<h3 id="notice">Notice</h3>
							<div class="notices note">
								<p>This is a simple note.</p>
							</div>
							<div class="notices tip">
								<p>This is a simple tip.</p>
							</div>
							<div class="notices info">
								<p>This is a simple info.</p>
							</div>
							<hr>
							<hr>
							<h2 id="blockquote">Blockquote</h2>
							<blockquote>
								<p>This is a blockquote example.</p>
							</blockquote>
							<hr>
							<h2 id="inline-html">Inline HTML</h2>
							<p>You can also use raw HTML in your Markdown, and it&rsquo;ll mostly work pretty well.</p>
							<dl> <dt>Definition list</dt>
								<dd>Is something people use sometimes.</dd> <dt>Markdown in HTML</dt>
								<dd>Does *not* work **very** well. Use HTML <em>tags</em>.</dd>
							</dl>
							<hr>
							<h2 id="tables">Tables</h2>
							<p>Colons can be used to align columns.</p>
							<table>
								<thead>
									<tr>
										<th>Tables</th>
										<th style="text-align:center">Are</th>
										<th style="text-align:right">Cool</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>col 3 is</td>
										<td style="text-align:center">right-aligned</td>
										<td style="text-align:right">$1600</td>
									</tr>
									<tr>
										<td>col 2 is</td>
										<td style="text-align:center">centered</td>
										<td style="text-align:right">$12</td>
									</tr>
									<tr>
										<td>zebra stripes</td>
										<td style="text-align:center">are neat</td>
										<td style="text-align:right">$1</td>
									</tr>
								</tbody>
							</table>
							<p>There must be at least 3 dashes separating each header cell. The outer pipes (|) are optional, and you don&rsquo;t need to make the raw Markdown line up prettily. You can also use inline Markdown.</p>
							<table>
								<thead>
									<tr>
										<th>Markdown</th>
										<th>Less</th>
										<th>Pretty</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><em>Still</em>
										</td>
										<td><code>renders</code>
										</td>
										<td><strong>nicely</strong>
										</td>
									</tr>
									<tr>
										<td>1</td>
										<td>2</td>
										<td>3</td>
									</tr>
								</tbody>
							</table>
							<hr>
							<h2 id="image">Image</h2>
							<img loading="lazy" decoding="async" class="w-100 d-block mb-4" src="images/post/post-1.jpg" alt="THIS IS AN IMAGE">
							<hr>
							<h2 id="youtube-video">Youtube video</h2>
							<div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
								<iframe src="https://www.youtube-nocookie.com/embed/DDpXdljhstg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border:0;" allowfullscreen title="YouTube Video"allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</article>
					<div class="mt-5">
						<div id="disqus_thread"></div>
						<script type="application/javascript">
							var disqus_config = function () {
							    
							    
							    
							    };
							    (function() {
							        if (["localhost", "127.0.0.1"].indexOf(window.location.hostname) != -1) {
							            document.getElementById('disqus_thread').innerHTML = 'Disqus comments not available by default when the website is previewed locally.';
							            return;
							        }
							        var d = document, s = d.createElement('script'); s.async = true;
							        s.src = '//' + "themefisher-template" + '.disqus.com/embed.js';
							        s.setAttribute('data-timestamp', +new Date());
							        (d.head || d.body).appendChild(s);
							    })();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
						</noscript>
<a href="https://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
					</div>
				</div>
        <div class="col-lg-4">
  <div class="widget-blocks">
    <div class="row">
      <div class="col-lg-12">
        <div class="widget">
          <div class="widget-body">
            <img loading="lazy" decoding="async" src="images/author.jpg" alt="About Me" class="w-100 author-thumb-sm d-block">
            <h2 class="widget-title my-3">Hootan Safiyari</h2>
            <p class="mb-3 pb-2">Hello, I’m Hootan Safiyari. A Content writter, Developer and Story teller. Working as a Content writter at CoolTech Agency. Quam nihil …</p> <a href="about.html" class="btn btn-sm btn-outline-primary">Know
              More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Recommended</h2>
          <div class="widget-body">
            <div class="widget-list">
              <article class="card mb-4">
                <div class="card-image">
                  <div class="post-info"> <span class="text-uppercase">1 minutes read</span>
                  </div>
                  <img loading="lazy" decoding="async" src="images/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                </div>
                <div class="card-body px-0 pb-1">
                  <h3><a class="post-title post-title-sm"
                      href="article.html">Portugal and France Now
                      Allow Unvaccinated Tourists</a></h3>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor …</p>
                  <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
                  </div>
                </div>
              </article>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="images/post/post-2.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">These Are Making It Easier To Visit</h3>
                  <p class="mb-0 small">Heading Here is example of hedings. You can use …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html"> <span class="image-fallback image-fallback-xs">No Image Specified</span>
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">No Image specified</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="images/post/post-5.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Perfect For Fashion</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
              <a class="media align-items-center" href="article.html">
                <img loading="lazy" decoding="async" src="images/post/post-9.jpg" alt="Post Thumbnail" class="w-100">
                <div class="media-body ml-3">
                  <h3 style="margin-top:-5px">Record Utra Smooth Video</h3>
                  <p class="mb-0 small">Lorem ipsum dolor sit amet, consectetur adipiscing …</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-6">
        <div class="widget">
          <h2 class="section-title mb-3">Categories</h2>
          <div class="widget-body">
            <ul class="widget-list">
              <li><a href="#!">computer<span class="ml-auto">(3)</span></a>
              </li>
              <li><a href="#!">cruises<span class="ml-auto">(2)</span></a>
              </li>
              <li><a href="#!">destination<span class="ml-auto">(1)</span></a>
              </li>
              <li><a href="#!">internet<span class="ml-auto">(4)</span></a>
              </li>
              <li><a href="#!">lifestyle<span class="ml-auto">(2)</span></a>
              </li>
              <li><a href="#!">news<span class="ml-auto">(5)</span></a>
              </li>
              <li><a href="#!">telephone<span class="ml-auto">(1)</span></a>
              </li>
              <li><a href="#!">tips<span class="ml-auto">(1)</span></a>
              </li>
              <li><a href="#!">travel<span class="ml-auto">(3)</span></a>
              </li>
              <li><a href="#!">website<span class="ml-auto">(4)</span></a>
              </li>
              <li><a href="#!">hugo<span class="ml-auto">(2)</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
			</div>
		</div>
	</section>
</main>
<?php include_once 'include/footer.php'?>

<!-- # JS Plugins -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>