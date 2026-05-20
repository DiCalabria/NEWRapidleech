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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo TEMPLATE_DIR; ?>styles/rl_style_pm.css">

    <!-- Inline SVG favicon — DiCalabria -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect rx='20' width='100' height='100' fill='%23E50914'/%3E%3Ctext x='50' y='62' text-anchor='middle' font-family='Georgia,serif' font-weight='700' font-size='44' fill='%23fff'%3EDC%3C/text%3E%3Crect x='18' y='72' width='64' height='6' rx='3' fill='%23fff' opacity='.7'/%3E%3C/svg%3E">

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
            <!-- DiCalabria logo mark: DC monogram with download bar -->
            <svg width="44" height="44" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect rx="18" width="100" height="100" fill="#E50914"/>
                <!-- Monogram DC -->
                <text x="50" y="58" text-anchor="middle" font-family="Georgia,serif" font-weight="700" font-size="46" fill="#ffffff">DC</text>
                <!-- Download underline bar -->
                <rect x="16" y="72" width="68" height="7" rx="3.5" fill="#ffffff" opacity="0.75"/>
            </svg>
            <!-- DiCalabria wordmark -->
            <div class="anunza-wordmark">
                <span class="anunza-name">DiCalabria</span>
                <span class="anunza-sub">Downloads</span>
            </div>
        </a>
        <div class="fl-theme-btn" onclick="toggleTheme()" title="Toggle theme">
            <span id="t-sun" class="fl-theme-icon">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>
            </span>
            <span id="t-moon" class="fl-theme-icon" style="display:none">
                <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/></svg>
            </span>
            <div class="fl-theme-track"><div class="fl-theme-dot"></div></div>
        </div>
    </header>

    <!-- Main content begins -->
    <main>
