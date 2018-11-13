import mmenu from 'jquery.mmenu';
import $ from 'jquery';

export class mmenuStarter {

		constructor() {
			var $menu = $("#menu").mmenu({
			   "extensions": [
					"position-left"
				]
			});
			var $icon = $("#mmenu-hamburger");
			var API = $menu.data( "mmenu" );

			$icon.on( "click", function() {
			   API.open();
			});

			API.bind( "open:finish", function() {
			   setTimeout(function() {
			      $icon.addClass( "is-active" );
			   }, 0);
			});
			API.bind( "close:finish", function() {
			   setTimeout(function() {
			      $icon.removeClass( "is-active" );
			   }, 0);
			});
		}

}

// export class Foo {
//   constructor() {
//     console.log("FOO");
//   }
// }
