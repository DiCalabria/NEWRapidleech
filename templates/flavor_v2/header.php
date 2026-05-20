<?php
@date_default_timezone_set(date_default_timezone_get());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DiCalabria Downloads</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>styles/rl_style_pm.css">

    <!-- Favicon: DC monogram vermelho -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect rx='20' width='100' height='100' fill='%23E50914'/%3E%3Cpath d='M22 25h20c14 0 22 8 22 25s-8 25-22 25H22V25z' fill='%23fff' opacity='.9'/%3E%3Cpath d='M62 35c8 0 16 6 16 15s-8 15-16 15' stroke='%23fff' stroke-width='8' fill='none' stroke-linecap='round'/%3E%3C/svg%3E">

    <script type="text/javascript">
    /* <![CDATA[ */
    var php_js_strings = [];
    php_js_strings[87]  = " <?php echo lang(87); ?>";
    php_js_strings[281] = "<?php echo lang(281); ?>";
    pic1 = new Image();
    pic1.src = "<?php echo TEMPLATE_DIR; ?>images/ajax-loading.gif";

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
            <!-- Logo DiCalabria: letra D estilizada + seta download -->
            <svg width="46" height="46" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect rx="16" width="100" height="100" fill="#E50914"/>
                <!-- Letra D -->
                <path d="M20 22 L20 78 L44 78 C62 78 76 65 76 50 C76 35 62 22 44 22 Z" fill="white" opacity="0.95"/>
                <path d="M32 34 L44 34 C56 34 64 41 64 50 C64 59 56 66 44 66 L32 66 Z" fill="#E50914"/>
                <!-- Seta download pequena no canto -->
                <path d="M68 62 L68 78 M62 72 L68 78 L74 72" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" opacity="0.85"/>
            </svg>
            <div class="dc-wordmark">
                <span class="dc-name">Rapidleech</span>
                <span class="dc-sub">Downloads</span>
            </div>
        </a>
        <div class="fl-theme-btn" onclick="toggleTheme()" title="Toggle theme">
            <span id="t-sun" class="fl-theme-icon">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
            </span>
            <span id="t-moon" class="fl-theme-icon" style="display:none">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/></svg>
            </span>
            <div class="fl-theme-track"><div class="fl-theme-dot"></div></div>
        </div>
    </header>

    <!-- Main content begins -->
    <main>
