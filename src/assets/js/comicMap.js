/**
 * Pieces Theme comic image map JS
 */
// create array with image items
var imageArray = [
    // comic page image map
    'https://storage.pieces-compendium.com/source/1/comicImageMap/14.png',
    'https://storage.pieces-compendium.com/source/1/comicImageMap/15.png',
    'https://storage.pieces-compendium.com/source/1/comicImageMap/16.png',
    'https://storage.pieces-compendium.com/source/1/comicImageMap/17.png',
    'https://storage.pieces-compendium.com/source/1/comicImageMap/18.png',
    'https://storage.pieces-compendium.com/source/1/comicImageMap/19.png'
];

// comic page image map
// TODO why does including these result in a fast DOM changes? dunno, but leave these here.
Image0 = new Image(800,3150);
Image0.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/14.png';

Image1 = new Image(800,3150);
Image1.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/15.png';

Image2 = new Image(800,3150);
Image2.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/16.png';

Image3 = new Image(800,3150);
Image3.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/17.png';

Image4 = new Image(800,3150);
Image4.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/18.png';

Image5 = new Image(800,3150);
Image5.src = 'https://storage.pieces-compendium.com/source/1/comicImageMap/19.png';

/**
 * Swap the DOM.character.src value
 */
function show(num) {
    var imageMap = document.querySelector('article.article-item > p >img');
    imageMap.src = imageArray[num];
    console.log(imageMap.src);
    return true;
}