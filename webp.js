// const imagemin = require('imagemin');
// const imageminWebp = require('imagemin-webp');

// (async () => {
//   await imagemin(['source/assets/images/layout/*.{jpg,png}'], {
//     destination: 'source/assets/images/layout/',
//     plugins: [
//       imageminWebp({quality: 65})
//     ]
//   });

//   console.log('Images optimized');
// })();

const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
	await imagemin(['source/assets/img/layout/*.{jpg,png}'], {
		destination: 'source/assets/img/layout/',
		plugins: [
			imageminWebp({quality: 50})
		]
	});

	console.log('Images optimized');
})();