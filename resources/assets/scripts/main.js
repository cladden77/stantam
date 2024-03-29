// import external dependencies
import 'jquery';

// Import Slick
import 'slick-carousel/slick/slick.min';

// Import Pushbar
import 'pushbar.js/src/pushbar';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import Pushbar from './util/Pushbar';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Trigger Pushbar sitewide for all slideout menus
new Pushbar({
  blur:true,
  overlay:true,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
