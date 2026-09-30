</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar { padding: 0; }
    .navbar-brand { padding: 0 1.5rem; font-size: 1.6rem; font-weight: 700; }
    .navbar-toggler { border: 0; box-shadow: none !important; margin-right: .75rem; }

    /* Four photo sections side by side inside the bar */
    .nav-tile {
      position: relative;
      display: flex; align-items: center; justify-content: center;
      height: 100px;
      color: #fff; text-decoration: none; font-weight: 600; font-size: 1.15rem;
      overflow: hidden; background-color: #3a3a3a;
    }
    .nav-tile .tile-bg {
      position: absolute; inset: 0;
      background-size: cover; background-position: center;
      transition: transform .4s ease;
    }
    .nav-tile::after { content: ""; position: absolute; inset: 0; background: rgba(0,0,0,.45); transition: background .3s; }
    .nav-tile span { position: relative; z-index: 1; }
    .nav-tile:hover { color: #fff; }
    .nav-tile:hover .tile-bg { transform: scale(1.08); }
    .nav-tile:hover::after { background: rgba(0,0,0,.25); }

    #mainMenu .navbar-nav { width: 100%; }
    #mainMenu .nav-item { flex: 1 1 0; }          /* four equal widths */

    @media (max-width: 991.98px) {
      .nav-tile { height: 80px; }
    }

    .main-content {
  padding-top: 106px;
}
.navbar-toggler { border: 0; box-shadow: none !important; }
  </style>
</head>
</body>
</html>