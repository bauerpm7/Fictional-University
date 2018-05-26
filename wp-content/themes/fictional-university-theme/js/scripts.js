// 3rd party packages from NPM
import $ from 'jquery';
import slick from 'slick-carousel';

// Our modules / classes
import MobileMenu from './modules/MobileMenu';
import HeroSlider from './modules/HeroSlider';
import GoogleMaps from './modules/GoogleMap';
import Search     from './modules/LiveSearch';

// Instantiate a new object using our modules/classes
var mobileMenu  = new MobileMenu();
var heroSlider  = new HeroSlider();
var googleMap   = new GoogleMaps();
var search      = new Search();