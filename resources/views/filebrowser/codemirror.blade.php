
<?php
  use Illuminate\Support\Facades\Auth;
?>

<link rel=stylesheet href="https://codemirror.net/doc/docs.css">
<link rel="stylesheet" href="https://codemirror.net/lib/codemirror.css">
<link rel="stylesheet" href="https://codemirror.net/theme/3024-day.css">
<link rel="stylesheet" href="https://codemirror.net/theme/abcdef.css">
<link rel="stylesheet" href="https://codemirror.net/theme/3024-night.css">
<link rel="stylesheet" href="https://codemirror.net/theme/ambiance.css">
<link rel="stylesheet" href="https://codemirror.net/theme/ayu-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/ayu-mirage.css">
<link rel="stylesheet" href="https://codemirror.net/theme/base16-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/bespin.css">
<link rel="stylesheet" href="https://codemirror.net/theme/base16-light.css">
<link rel="stylesheet" href="https://codemirror.net/theme/blackboard.css">
<link rel="stylesheet" href="https://codemirror.net/theme/cobalt.css">
<link rel="stylesheet" href="https://codemirror.net/theme/colorforth.css">
<link rel="stylesheet" href="https://codemirror.net/theme/dracula.css">
<link rel="stylesheet" href="https://codemirror.net/theme/duotone-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/duotone-light.css">
<link rel="stylesheet" href="https://codemirror.net/theme/eclipse.css">
<link rel="stylesheet" href="https://codemirror.net/theme/elegant.css">
<link rel="stylesheet" href="https://codemirror.net/theme/erlang-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/gruvbox-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/hopscotch.css">
<link rel="stylesheet" href="https://codemirror.net/theme/icecoder.css">
<link rel="stylesheet" href="https://codemirror.net/theme/isotope.css">
<link rel="stylesheet" href="https://codemirror.net/theme/lesser-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/liquibyte.css">
<link rel="stylesheet" href="https://codemirror.net/theme/lucario.css">
<link rel="stylesheet" href="https://codemirror.net/theme/material.css">
<link rel="stylesheet" href="https://codemirror.net/theme/material-darker.css">
<link rel="stylesheet" href="https://codemirror.net/theme/material-palenight.css">
<link rel="stylesheet" href="https://codemirror.net/theme/material-ocean.css">
<link rel="stylesheet" href="https://codemirror.net/theme/mbo.css">
<link rel="stylesheet" href="https://codemirror.net/theme/mdn-like.css">
<link rel="stylesheet" href="https://codemirror.net/theme/midnight.css">
<link rel="stylesheet" href="https://codemirror.net/theme/monokai.css">
<link rel="stylesheet" href="https://codemirror.net/theme/moxer.css">
<link rel="stylesheet" href="https://codemirror.net/theme/neat.css">
<link rel="stylesheet" href="https://codemirror.net/theme/neo.css">
<link rel="stylesheet" href="https://codemirror.net/theme/night.css">
<link rel="stylesheet" href="https://codemirror.net/theme/nord.css">
<link rel="stylesheet" href="https://codemirror.net/theme/oceanic-next.css">
<link rel="stylesheet" href="https://codemirror.net/theme/panda-syntax.css">
<link rel="stylesheet" href="https://codemirror.net/theme/paraiso-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/paraiso-light.css">
<link rel="stylesheet" href="https://codemirror.net/theme/pastel-on-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/railscasts.css">
<link rel="stylesheet" href="https://codemirror.net/theme/rubyblue.css">
<link rel="stylesheet" href="https://codemirror.net/theme/seti.css">
<link rel="stylesheet" href="https://codemirror.net/theme/shadowfox.css">
<link rel="stylesheet" href="https://codemirror.net/theme/solarized.css">
<link rel="stylesheet" href="https://codemirror.net/theme/the-matrix.css">
<link rel="stylesheet" href="https://codemirror.net/theme/tomorrow-night-bright.css">
<link rel="stylesheet" href="https://codemirror.net/theme/tomorrow-night-eighties.css">
<link rel="stylesheet" href="https://codemirror.net/theme/ttcn.css">
<link rel="stylesheet" href="https://codemirror.net/theme/twilight.css">
<link rel="stylesheet" href="https://codemirror.net/theme/vibrant-ink.css">
<link rel="stylesheet" href="https://codemirror.net/theme/xq-dark.css">
<link rel="stylesheet" href="https://codemirror.net/theme/xq-light.css">
<link rel="stylesheet" href="https://codemirror.net/theme/yeti.css">
<link rel="stylesheet" href="https://codemirror.net/theme/idea.css">
<link rel="stylesheet" href="https://codemirror.net/theme/darcula.css">
<link rel="stylesheet" href="https://codemirror.net/theme/yonce.css">
<link rel="stylesheet" href="https://codemirror.net/theme/zenburn.css">
<script type="text/javascript" src="https://codemirror.net/lib/codemirror.js"></script>
<script type="text/javascript" src="https://codemirror.net/mode/javascript/javascript.js"></script>
<script type="text/javascript" src="https://codemirror.net/addon/selection/active-line.js"></script>
<script type="text/javascript" src="https://codemirror.net/addon/edit/matchbrackets.js"></script>

<x-guest-layout>
<div class="py-12">
  <form method="get" action="">
    <a class="btn btn-primary text-white" href="{{ route('dashboard') }}"><i class="fa fa-arrow-left"></i> Back</a>
    <input class="btn btn-primary text-white" id="dwn-btn" value="Download" />
    <textarea id="text-val" name="text-val">AAA</textarea>
  </form>

  <p>Select a theme: <select onchange="selectTheme()" id=select>
      <option selected>default</option>
      <option>3024-day</option>
      <option>3024-night</option>
      <option>abcdef</option>
      <option>ambiance</option>
      <option>ayu-dark</option>
      <option>ayu-mirage</option>
      <option>base16-dark</option>
      <option>base16-light</option>
      <option>bespin</option>
      <option>blackboard</option>
      <option>cobalt</option>
      <option>colorforth</option>
      <option>darcula</option>
      <option>dracula</option>
      <option>duotone-dark</option>
      <option>duotone-light</option>
      <option>eclipse</option>
      <option>elegant</option>
      <option>erlang-dark</option>
      <option>gruvbox-dark</option>
      <option>hopscotch</option>
      <option>icecoder</option>
      <option>idea</option>
      <option>isotope</option>
      <option>lesser-dark</option>
      <option>liquibyte</option>
      <option>lucario</option>
      <option>material</option>
      <option>material-darker</option>
      <option>material-palenight</option>
      <option>material-ocean</option>
      <option>mbo</option>
      <option>mdn-like</option>
      <option>midnight</option>
      <option>monokai</option>
      <option>moxer</option>
      <option>neat</option>
      <option>neo</option>
      <option>night</option>
      <option>nord</option>
      <option>oceanic-next</option>
      <option>panda-syntax</option>
      <option>paraiso-dark</option>
      <option>paraiso-light</option>
      <option>pastel-on-dark</option>
      <option>railscasts</option>
      <option>rubyblue</option>
      <option>seti</option>
      <option>shadowfox</option>
      <option>solarized dark</option>
      <option>solarized light</option>
      <option>the-matrix</option>
      <option>tomorrow-night-bright</option>
      <option>tomorrow-night-eighties</option>
      <option>ttcn</option>
      <option>twilight</option>
      <option>vibrant-ink</option>
      <option>xq-dark</option>
      <option>xq-light</option>
      <option>yeti</option>
      <option>yonce</option>
      <option>zenburn</option>
    </select>
  </p>

  <script>
    var editor = CodeMirror.fromTextArea(document.getElementById("text-val"), {
      lineNumbers: true,
      styleActiveLine: true,
      matchBrackets: true
    });
    var input = document.getElementById("select");

    function selectTheme() {
      var theme = input.options[input.selectedIndex].textContent;
      editor.setOption("theme", theme);
      location.hash = "#" + theme;
    }
    var choice = (location.hash && location.hash.slice(1)) ||
      (document.location.search &&
        decodeURIComponent(document.location.search.slice(1)));
    if (choice) {
      input.value = choice;
      editor.setOption("theme", choice);
    }
    CodeMirror.on(window, "hashchange", function() {
      var theme = location.hash.slice(1);
      if (theme) {
        input.value = theme;
        selectTheme();
      }
    });
  </script>
  </article>
  </div>
  <script>
function downloadasTextFile(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

// Start file download.
document.getElementById("dwn-btn").addEventListener("click", function(){
    // Generate download of phpcodertech.txt file with some content
    var text = document.getElementById("text-val").value;
    var filename = "phpcodertech.txt";
    
    downloadasTextFile(filename, text);
}, false);
  </script>
</x-guest-layout>