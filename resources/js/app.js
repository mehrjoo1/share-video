import './bootstrap';
// import "../css/app.css";
import "../css/style.css";
import "../css/my-style.css";
import "../css/responsive.css";
import "../css/bootstrap.min.css";
import "./jquery-3.2.1.min";
import "./jquery.sticky-kit.min";
import "./custom";
import "./bootstrap.min";
import "./imagesloaded.pkgd.min";
import "./grid-blog.min";
import "./imagesloaded.pkgd.min";

import.meta.glob([
    '../img/**',
    '../css/fonts/**',
  ]);

import './custom';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();
