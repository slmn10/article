/************* Custom Js File ************************
    Template Name: Maaxen - Real Estate HTML Template
    Author: Evrothemes
    Version: 1.0
    Copyright: 2020
*************************************************************/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		function payment(amount, rate, frequency, period) {
			const P = parseFloat(amount);
			const n = parseInt(period, 10);
			const accelerated = /a/.test(frequency)
			frequency = parseInt(frequency.replace('a', ''), 10);

			let i = parseFloat(rate) / 200;
			let Pmt;

			if (accelerated) {
				i = Math.pow(1 + i, 1 / 6);
				Pmt = P * ((i - 1) / (1 - Math.pow(i, -12 * n)));
				Pmt = (Pmt * 13) / frequency;
			} else {
				i = Math.pow(1 + i, 1 / (frequency / 2));
				Pmt = P * ((i - 1) / (1 - Math.pow(i, -frequency * n)));
			}

			return Pmt;
		}

		(function () {
			const amount = $('[name="amount"]');
			const rate = $('[name="rate"]');
			const freq = $('[name="freq"]');
			const amort = $('[name="amort"]');

			function update() {
				const pmt = payment(amount.value, rate.value, freq.value, amort.value);
				document.getElementById("output").innerHTML = `$${pmt.toFixed(2)}`;
			}

			function $(selector) {
				var el = document.querySelectorAll(selector)
				if (el.length < 2) {
					return el[0]
				}
				return el
			}

			update();
			document.addEventListener('change', update, true);
			document.addEventListener('keyup', update, true);
		})();


	});


}(jQuery));

