/**
 * Pieces Theme character map JS
 */
// create array with image items
var imageArray = [
    'https://storage.pieces-compendium.com/source/1/characterImageMap/0.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/1.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/2.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/3.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/4.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/5.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/6.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/7.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/8.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/9.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/10.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/11.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/12.png',
    'https://storage.pieces-compendium.com/source/1/characterImageMap/13.png',
];

// character page image map
Image0 = new Image(800,800);
Image0.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/0.png';

Image1 = new Image(800,800);
Image1.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/1.png';

Image2 = new Image(800,800);
Image2.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/2.png';

Image3 = new Image(800,800);
Image3.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/3.png';

Image4 = new Image(800,800);
Image4.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/4.png';

Image5 = new Image(800,800);
Image5.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/5.png';

Image6 = new Image(800,800);
Image6.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/6.png';

Image7 = new Image(800,800);
Image7.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/7.png';

Image8 = new Image(800,800);
Image8.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/8.png';

Image9 = new Image(800,800);
Image9.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/9.png';

Image10 = new Image(800,800);
Image10.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/10.png';

Image11 = new Image(800,800);
Image11.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/11.png';

Image12 = new Image(800,800);
Image12.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/12.png';

Image13 = new Image(800,800);
Image13.src = 'https://storage.pieces-compendium.com/source/1/characterImageMap/13.png';
/**
 * Swap the DOM.character.src value
 */
function show(num) {
    var imageMap = document.querySelector('article.article-item > p >img');
    imageMap.src = imageArray[num];
    console.log(imageMap.src);
    return true;
}