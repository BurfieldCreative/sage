<h2 style="text-align: center;">Menus</h2>
<ol>
	<li>To alter the menu to a different one open templates/base.php and set the variable at the top of the page to an integer available options are, 1 - 8</li>
	<li>To set the height or color or the hamburger go to variables.scss set them first followed by menu.scss to overide settings or tweak lastly in menu-animations at the bottom</li>
	<li>Edit all menu buttons in buttons.scss this includes header and footer menus</li>
</ol>
<h2 style="text-align: center;">The Grid System</h2>
<ol>
	<li>Heres an example using the media queries to change the footer background depending on screensize
<pre>footer.footer {
  background: yellow;
  @include breakpoint(small) {
    background: blue;
  }
  @include breakpoint(medium) {
    background: red;
  }
  @include breakpoint(large) {
    background: green;
  }
}
</pre>
&nbsp;</li>
	<li>.container - has a set width, is center aligned and applies a 15px gutter padding (left and right)</li>
	<li>.container-full - has a set width, is center aligned and has no gutter padding (left and right)</li>
	<li>Example of available breakpoints in code you should get the idea the <strong>-div is so the markup displays here properly</strong>
<pre>
<-div class="clear">
  <-div class="col-4 push-8 col-7-tablet push-5-tablet col-3-desktop push-9-desktop col-2-hd push-10-hd">
    content...
  <-/div>
  <-div class="col-8 pull-4 col-5-tablet pull-7-tablet col-9-desktop pull-3-desktop col-10-hd pull-2-hd">
    content...
  <-/div>
<-/div>
</pre>
</li>
	<li>Plus push and pull same principle
<pre>

</pre>
</li>
</ol>
<h2 style="text-align: center;">Islands</h2>
<ul>
	<li>Another useful trick are islands these can be found in mixins.scss
<pre>island</pre>
Adds the <dfn>$gutterwidth*2</dfn> to top and bottom of div
<pre>island-top</pre>
Adds the <dfn>$gutterwidth*2</dfn> to the top ONLY
<pre>island-bottom</pre>
Adds the <dfn>$gutterwidth*2</dfn> to the bottom ONLY
<pre>island-half</pre>
Adds the <dfn>$gutterwidth</dfn> to the top and bottom</li>
</ul>
<h2 style="text-align: center;">Adding Required plugins</h2>
<ol>
	<li>To add advanced custom fields open composer.json at the root and add to the extra installer paths line 45ish</li>
	<li>Then run composer update</li>
</ol>
