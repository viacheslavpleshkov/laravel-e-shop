window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap/dist/js/bootstrap.min');
} catch (e) {}