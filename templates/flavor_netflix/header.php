<?php
@date_default_timezone_set(date_default_timezone_get());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Anunza Downloads</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>styles/rl_style_pm.css">

    <!-- Inline SVG favicon — Anunza red -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect rx='20' width='100' height='100' fill='%23E50914'/%3E%3Cpath d='M50 20v36' stroke='%23fff' stroke-width='8' stroke-linecap='round'/%3E%3Cpath d='M30 42l20 22 20-22' stroke='%23fff' stroke-width='8' fill='none' stroke-linecap='round' stroke-linejoin='round'/%3E%3Crect x='26' y='72' width='48' height='8' rx='4' fill='%23fff'/%3E%3C/svg%3E">

    <script type="text/javascript">
    /* <![CDATA[ */
    var php_js_strings = [];
    php_js_strings[87]  = " <?php echo lang(87); ?>";
    php_js_strings[281] = "<?php echo lang(281); ?>";
    pic1 = new Image();
    pic1.src = "<?php echo TEMPLATE_DIR; ?>images/ajax-loading.gif";

    /* ---- Theme ---- */
    (function(){
        var t = localStorage.getItem('fl-theme') || 'dark';
        document.documentElement.setAttribute('data-theme', t);
    })();
    function toggleTheme(){
        var h = document.documentElement,
            c = h.getAttribute('data-theme'),
            n = c === 'dark' ? 'light' : 'dark';
        h.setAttribute('data-theme', n);
        localStorage.setItem('fl-theme', n);
        updThemeUI();
    }
    function updThemeUI(){
        var d = document.documentElement.getAttribute('data-theme');
        var s = document.getElementById('t-sun'), m = document.getElementById('t-moon');
        if(s&&m){ s.style.display = d==='dark'?'none':'inline'; m.style.display = d==='dark'?'inline':'none'; }
    }
    document.addEventListener('DOMContentLoaded', updThemeUI);
    /* ]]> */
    </script>
    <script type="text/javascript" src="classes/js.js"></script>
    <?php
    if ($GLOBALS['options']['ajax_refresh']) { echo '<script type="text/javascript" src="classes/ajax_refresh.js"></script>'.$nn; }
    if ($GLOBALS['options']['flist_sort'])   { echo '<script type="text/javascript" src="classes/sorttable.js"></script>'.$nn; }
    ?>
</head>
<body>
<div class="fl-wrap">

    <!-- Top Bar -->
    <header class="fl-topbar">
        <a href="/" class="fl-brand">
            <!-- Anunza icon mark -->
            <div class="anunza-mark"></div>
            <!-- Anunza wordmark -->
            <div class="anunza-wordmark">
                <span class="anunza-name">Anunza</span>
                <span class="anunza-sub">Downloads</span>
            </div>
        </a>
        <div class="fl-theme-btn" onclick="toggleTheme()" title="Toggle theme">
            <span id="t-sun" class="fl-theme-icon">☀️</span>
            <span id="t-moon" class="fl-theme-icon" style="display:none">🌙</span>
            <div class="fl-theme-track"><div class="fl-theme-dot"></div></div>
        </div>
    </header>

    <!-- Main content begins -->
    <main>
