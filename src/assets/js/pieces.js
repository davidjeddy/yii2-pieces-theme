/**
 * Pieces Theme JS
 */
// create array with image items
var imageArray = [
    // character page image map
    'http://storage.pieces-compendium.com/source/1/characterImageMap/0.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/1.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/2.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/3.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/4.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/5.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/6.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/7.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/8.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/9.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/10.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/11.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/12.png',
    'http://storage.pieces-compendium.com/source/1/characterImageMap/13.png',

    // comic page image map
    'http://storage.pieces-compendium.com/source/1/comicImageMap/14.png',
    'http://storage.pieces-compendium.com/source/1/comicImageMap/15.png',
    'http://storage.pieces-compendium.com/source/1/comicImageMap/16.png',
    'http://storage.pieces-compendium.com/source/1/comicImageMap/17.png',
    'http://storage.pieces-compendium.com/source/1/comicImageMap/18.png',
    'http://storage.pieces-compendium.com/source/1/comicImageMap/19.png'
];

// character page image map
// TODO why does including these result in a fast DOM changes? dunno, but leave these here.
Image0 = new Image(800,800);
Image0.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/0.png';

Image1 = new Image(800,800);
Image1.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/1.png';

Image2 = new Image(800,800);
Image2.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/2.png';

Image3 = new Image(800,800);
Image3.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/3.png';

Image4 = new Image(800,800);
Image4.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/4.png';

Image5 = new Image(800,800);
Image5.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/5.png';

Image6 = new Image(800,800);
Image6.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/6.png';

Image7 = new Image(800,800);
Image7.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/7.png';

Image8 = new Image(800,800);
Image8.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/8.png';

Image9 = new Image(800,800);
Image9.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/9.png';

Image10 = new Image(800,800);
Image10.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/10.png';

Image11 = new Image(800,800);
Image11.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/11.png';

Image12 = new Image(800,800);
Image12.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/12.png';

Image13 = new Image(800,800);
Image13.src = 'http://storage.pieces-compendium.com/source/1/characterImageMap/13.png';

// comic page image map
Image14 = new Image(800,3150);
Image14.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/14.png';

Image15 = new Image(800,3150);
Image15.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/15.png';

Image16 = new Image(800,3150);
Image16.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/16.png';

Image17 = new Image(800,3150);
Image17.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/17.png';

Image18 = new Image(800,3150);
Image18.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/18.png';

Image19 = new Image(800,3150);
Image19.src = 'http://storage.pieces-compendium.com/source/1/comicImageMap/19.png';

/**
 * Swap the DOM.character.src value
 */
function show(num) {
    var imageMap = document.querySelector('article.article-item > p >img');
    imageMap.src = imageArray[num];
    console.log(imageMap.src);
    return true;
}